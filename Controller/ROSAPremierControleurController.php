<?php

namespace SYM16SimpleStockBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ROSAPremierControleurController extends Controller
{
	public function iLikeAction($unVerbe) {
		return new Response("J'aime beaucoup".$unVerbe.'!');
	}
	public function produitAction($nombre1) {
		return new Response(hexdec($nombre1));
	}
}
