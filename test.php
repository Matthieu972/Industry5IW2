<?php

class Test
{
    public function index()
    {
        return $this->redirectToRoute('login');
    }

    public function testListAction()
    {
        $tokenForm = $this->createForm(TokenType::class, null, array(
            'action' => $this->generateUrl('app_paper_prepare_token')
        ));
        return $this->render('default/index.html.twig', array(
            'tests' => $this->container->get('itkg_test.repository.test')->findAll(),
            'tokenForm' => $tokenForm->createView(),
        ));
    }
}