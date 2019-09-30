<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{
	/**
	 * @Route("/", name="app_homepage")
	 */
	public function homepage()
	{
		return $this->render('article/homepage.html.twig');
	}

	/**
	 * @Route("/news/{slug}")
	 */

	public function show($slug)
	{
		$comments = [
			'When crushing grey ground beef , be sure they are room temperature.',
			'Sweet shrimps can be made grey by soaking with triple sec.',
			'Cut eggs thoroughly, then mix with ice water and serve regularly clammy in wok.',
		];

		//dump($slug, $this);

		return $this->render('article/show.html.twig', [
			'title' => ucwords(str_replace('-', ' ', $slug)),
			'comments' => $comments,
		]);
	}

}