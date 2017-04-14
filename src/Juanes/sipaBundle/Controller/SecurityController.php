<?php

namespace Juanes\sipaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;

class SecurityController extends Controller
	{
		public function loginAction(Request $request)
		{
			$session = $request->getSession();

			if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
				$error = $request->attributes->get(
					Security::AUTHENTICATION_ERROR
				);
			} elseif (null !== $session && $session->has(Security::AUTHENTICATION_ERROR)) {
				$error = $session->get(Security::AUTHENTICATION_ERROR);
				$session->remove(Security::AUTHENTICATION_ERROR);
			} else {
				$error = '';
			}
			return $this->render(
				'JuanessipaBundle:Security:login.html.twig', 
				array(
					'error'	=> $error,
				)
			);
		}
	}