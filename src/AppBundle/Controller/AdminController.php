<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use BackendBundle\Entity\Conferencias;
use BackendBundle\Entity\Horarios;
use AppBundle\Form\RegistroType;

class AdminController extends Controller {

	private $session;

	public function __construct() {
		$this->session = new Session();
	}

	public function homeAction(Request $request) {
        return $this->render('AppBundle:Admin:home.html.twig'
        );
  }

	public function orderlistAction(Request $request) {
        $em=$this->getDoctrine()->getManager();

				$dql="SELECT u, o
							FROM BackendBundle:Orders o
							JOIN o.users u
							order by o.tematicasid asc";
				$query=$em->createQuery($dql);

				$dql1 = "select t
								from BackendBundle:Tematicas t
								order by id asc";
				$query1=$em->createQuery($dql1);
				$tematicas=$query->getResult();

        $paginator=$this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page',1),20);

        return $this->render('AppBundle:Admin:orderlist.html.twig', array(
            'pagination'=>$pagination,
						'tematicas'=>$tematicas
        ));
  }

	public function orderinfoAction(Request $request, $id) {
	        $em=$this->getDoctrine()->getManager();
					$orders_repo=$em->getRepository("BackendBundle:Orders");
					$ordenes=$orders_repo->find($id);

					$dql = "select os
									from BackendBundle:Orderskus os
									where os.ordersOrderid=:ordersOrderid";
					$query=$em->createQuery($dql);
					$query->setParameter('ordersOrderid', $id);
					$ordersku=$query->getResult();

	        return $this->render('AppBundle:Admin:orderinfo.html.twig', array(
	            'ordenes'=>$ordenes,
							'ordersku'=>$ordersku
	        ));
	}


	public function editorderlistAction(Request $request,$order,$user) {
		$em = $this->getDoctrine()->getManager();
		$orders_repo=$em->getRepository("BackendBundle:Orders");
		$ord=$orders_repo->find($order);
		$form = $this->createForm(OrderType::class, $ord);//, array(
		$form->handleRequest($request);
		if ($form->isSubmitted()) {
			if ($form->isValid()) {
				$order->setCustomerName($form->get("customername")->getData());
				$em->persist($order);
				$flush = $em->flush();

					if ($flush == null) {
						$status = "Change is correct";

						$this->session->getFlashBag()->add("status", $status);

					} else {
						$status = "There was an error in the change";
					}

			} else {
				$status = "There was an error in the change";
			}
			//$this->session->getFlashBag()->add("status", $status);
			return $this->redirectToRoute("orderlist");

		}

		return $this->render('AppBundle:Admin:editorderlist.html.twig', array(
					"form" => $form->createView(),

		));
	}

	public function updatestnAction(Request $request,$id) {

				$data=$request->query->get('data');

				$em = $this->getDoctrine()->getManager();
				$orders_repo=$em->getRepository("BackendBundle:Orders");
				$order=$orders_repo->find($id);

				$order->setShippingtrackingnumber($data);
				$order->setStatus("Shipped");
				$em->persist($order);
				$flush = $em->flush();

				if ($flush == null) {
					$status = "Change Shipping Tracking Number ";
				} else {
					$status = "Fail";
				}
				return new Response ($status);
	}

	public function listadoAction(Request $request) {
	        $em=$this->getDoctrine()->getManager();
					$dql="Select c
								from BackendBundle:Conferencias c
								order by c.tematicas asc ";
	        $query=$em->createQuery($dql);

	        $paginator=$this->get('knp_paginator');
	        $pagination = $paginator->paginate(
	                $query, $request->query->getInt('page',1),5);

	        return $this->render('AppBundle:Admin:listado.html.twig', array(
	            'pagination'=>$pagination,
	        ));
	}

	public function registroAction(Request $request) {
		$conferencia = new Conferencias();
		$form = $this->createForm(RegistroType::class, $conferencia);


		$form->handleRequest($request);

		if ($form->isSubmitted()) {

			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($conferencia);
				$flush = $em->flush();

					if ($flush == null) {
						$status = "Conferencia registrada";

						$this->session->getFlashBag()->add("status", $status);
						return $this->redirect("listado");
					} else {
						$status = "No se registro";
					}

			} else {
				$status = "No se registro";
			}

			$this->session->getFlashBag()->add("status", $status);
		}

		return $this->render('AppBundle:Admin:registro.html.twig', array(
					"form" => $form->createView()
		));

	}

	public function tematicasAction(Request $request) {
		$em=$this->getDoctrine()->getManager();
	  $dql="Select t
				 from BackendBundle:Tematicas t
				 order by t.id asc ";
	  $query=$em->createQuery($dql);

	 $paginator=$this->get('knp_paginator');
	 $pagination = $paginator->paginate(
					 $query, $request->query->getInt('page',1),5);

	 return $this->render('AppBundle:Admin:tematicas.html.twig', array(
			 'pagination'=>$pagination,
	 ));
	}

	public function distribucionAction(Request $request, $id) {
	        $em=$this->getDoctrine()->getManager();
					//$conferencias_repo=$em->getRepository("BackendBundle:Conferencias");
					//$conferencia=$conferencias_repo->find($id);

					$dql = "select c
									from BackendBundle:Conferencias c
									where c.tematicas=:tematicas";
					$query=$em->createQuery($dql);
					$query->setParameter('tematicas', $id);
					$conferencia=$query->getResult();

	        return $this->render('AppBundle:Admin:distribucion.html.twig', array(
	            'conferencia'=>$conferencia,
	        ));
	}

}
