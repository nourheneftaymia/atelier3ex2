<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return new Response ("Bonjour");
        
    }
public function showTeacher(){
    return new Response("show Teacher");
}

#[Route('/showTeacher/{name}',name:'show_teacher')]
public function showTeacherWithName($name){
    return new Response ('Bonjour '.$name);

}
#[Route('/showTeacherTwig',name:'show_teacher_twig')]
public function showTWIG(){
    $title='List of teachers';
    $teachers=array(
     array('id'=>1,'name'=>'Teacher 1','nb_class'=>4),
     array('id'=>2,'name'=>'Teacher 2','nb_class'=>7),
     array('id'=>3,'name'=>'Teacher 3','nb_class'=>6)
    );
    return $this->render('teacher/show.html.twig', ['t' => $title, 'tt' => $teachers]);
}

#[Route('/authors',name:'authors_list')]
public function  ListAuthors(){
    $authors = array( 
        array('id' => 1, 'picture' => '/images/Victor-Hugo.jpg','username' => ' Victor  Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100), 
        array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => ' William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' => 200 ), 
        array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => ' Taha  Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),); 

        return $this->render('author/list.html.twig', ['authors' => $authors]);
    }
#[Route('/authorsDetails',name:'authors_details')]
public function authorDetails($id)
{
    
}



}