<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comment", name="comment")
     */
    public function index(): Response
    {
        return $this->render('comment/index.html.twig', [
            'controller_name' => 'CommentController',
        ]);
    }

    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", name="name", methods="POST")
     */
    public function commentVote($id, $direction)
    {
        if($direction==='up')
        {
            $currentVoteCount = rand(7,15);
        } else{
            $currentVoteCount=rand(0,5);
        }
        return $this->json(['votes'=>$currentVoteCount]);
    }
}
