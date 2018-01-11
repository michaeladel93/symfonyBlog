<?php

namespace AppBundle\Controller;
use AppBundle\Entity\posts;
use AppBundle\Entity\users;
use AppBundle\Entity\comments;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class BlogController extends Controller
{
    /**
     * @Route("/Blog", name="home")
     */
    public function homeAction(Request $request)
    {
        $Posts= $this->getDoctrine()->getRepository("AppBundle:posts")->findAll();
        // replace this example code with whatever you need
        return $this->render('blog/home.html.twig', array("posts"=>$Posts));
    }
    /**
     * @Route("/Blog/fullpost/{id}", name="fullpost")
     */
    public function fullpostAction($id,Request $request)
    { 
         $Post= $this->getDoctrine()->getRepository("AppBundle:posts")->find($id);
         $Comments= $this->getDoctrine()->getRepository("AppBundle:comments")->findBy(array('postId'=>$id));
        return $this->render('blog/Post.html.twig', array("post"=>$Post,'comments'=>$Comments));
    }
    /**
     * @Route("/Blog/fullpost/commentsubmit/{id}", name="submitcomment")
     */
    public function submitAction($id,Request $request)
    { if(isset($_POST['Submit']))
    {
         $em = $this->getDoctrine()->getManager();

        $comment = new comments();
        $comment->setPostId($id);
        
        $comment->setCommentedBy($_POST['Name']);
        $now= date('H:i:s \O\n d/m/Y');
        $comment->setCommentDate($now);
        $comment->setComment($_POST['Comment']);
    // tells Doctrine you want to (eventually) save the Product (no queries yet)
         $em->persist($comment);

    // actually executes the queries (i.e. the INSERT query)
         $em->flush();
    
         $this->addFlash('notice', 'Your Comment was added');
    }
        return $this->redirectToRoute('fullpost',array('id'=>$id));
    }
     /**
     * @Route("/addPost", name="post")
     */
    public function PostAction(Request $request)
    {
        $postdata=new posts;
        $form=$this->createFormBuilder($postdata)
                ->add('postTitle', TextType::class,array('attr'=>array('class'=>'form-control','style'=>'margin-top:15px','label' => 'Post title')))
                ->add('postDetails', TextType::class,array('attr'=>array('class'=>'form-control','style'=>'margin-top:15px','label' => 'Post Category')))
                ->add('postedBy', TextType::class,array('attr'=>array('class'=>'form-control','style'=>'margin-top:15px','label' => 'Author')))
                ->add('postDate', TextType::class,array('attr'=>array('class'=>'form-control','style'=>'margin-top:15px','label' => 'Post date')))
                ->add('postImg', FileType::class,array('attr'=>array('class'=>'form-control','style'=>'margin-top:15px','label' => 'Post image')))
                ->add('postData', TextareaType::class,array('attr'=>array('class'=>'form-control','style'=>'margin-top:15px','label' => 'Post')))
                ->add('submit', SubmitType::class,array('attr'=>array('class'=>'form-control btn btn-success','style'=>'margin-top:15px','label' => 'Post title')))
                ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
    
             $file = $postdata->getPostImg();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('image_derctory'),
                $fileName);
            $postdata->setPostImg($fileName);
            $em= $this->getDoctrine()->getManager();
            $em->persist($postdata);
            $em->flush();
            $this->addFlash('notice', 'Post added');
            return $this->redirectToRoute('admin');
        }
        return $this->render('blog/AddPost.html.twig',array('form'=>$form->createView()));
    }
    
     /**
     * @Route("/admin", name="admin")
     */
    public function adminAction(Request $request)
    {
        $Posts= $this->getDoctrine()->getRepository("AppBundle:posts")->findAll();
        
        
        
        return $this->render('blog/AdminPanel.html.twig', array("posts"=>$Posts));
    }
     
      /**
     * @Route("admin/delete/deletepost/{id}", name="delete")
     */
    public function deletepostAction($id)
    {
        
        
         $em= $this->getDoctrine()->getManager();
           $post=$em->getRepository('AppBundle:posts')->find($id);
           
           $em->remove($post);
           $em->flush();
           $this->addFlash('notice', 'Post deleted');
       
        return $this->redirectToRoute('admin');
    }

}
