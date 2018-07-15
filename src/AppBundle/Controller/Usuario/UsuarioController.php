<?php
namespace AppBundle\Controller\Usuario;

use AppBundle\Entity\Usuario;
//use Doctrine\DBAL\Types\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UsuarioController extends Controller {

	/**
	 * @Route("/usuario", name="lista_usuarios")
	 */
	public function indexUsuario() {

		$usuarios = $this->getDoctrine()
			->getRepository(Usuario::class)
			->findAll();

		return $this->render('@App/Usuario/lista_usuarios.html.twig', ["usuarios" => $usuarios]
			///////////////////////////////
			// dump("aqui estamos");
			// die;
			// return $this->render('default/index.html.twig', [
			//       'base_dir'=>"Feudy Almonte",
			//       // 'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
		);
	}
    /**
     * @Route("/usuario/{id}", name="editar_usuario")
     * @Method("GET")
     */
    public function indexEditUsuario(Usuario $usuario) {
//var_dump($usuario->getNombre());die;
        $usuarioedit = new Usuario();
        $usuarioedit->setNombre($usuario->getNombre());
        $usuarioedit->setUsername($usuario->getUsername());
        $usuarioedit->setEmail($usuario->getEmail());
        $usuarioedit->setContrasena($usuario->getContrasena());
        $usuarioedit->setTipoUsuario($usuario->getTipoUsuario());

//        $newuser->setUsername(new \DateTime('tomorrow'));


        $form = $this->createFormBuilder($usuarioedit)
            ->add('nombre', TextType::class)
            ->add('username', TextType::class)
            ->add('email', TextType::class)
            ->add('contrasena', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Las contraseñas no concuerdan.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' =>true,
                'first_options' => array('label' => 'Contraseña'),
                'second_options' => array('label' => 'Repetir Contraseña')
            ))
            ->add('tipo_Usuario', ChoiceType::class, array(
                'choices'  => array(
                    'Técnico' => 'tecnico',
                    'Normal' => 'normal'
                )
            ))
            ->add('save', SubmitType::class, array('label' => 'Editar Usuario'))
            ->getForm();



//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $usuario = $form->getData();
//
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($usuario);
//            $em->flush();
//
//            return $this->redirectToRoute('lista_usuarios');
//        }

        return $this->render('@App/Usuario/editar_usuario.html.twig', array(
            'form' => $form->createView(),
        ));





//        return $this->render('@App/Usuario/editar_usuario.html.twig',
//            [
//                "usuario" => $usuario
//            ]
//        );
    }

    /**
     * @Route("/usuario/{id}/remove", name="valida_eliminar_usuario")
     */
    public function validDeleteUsuario(Usuario $usuario) {

        return $this->render('@App/Usuario/eliminar_usuario.html.twig',
            [
                "usuario" => $usuario
            ]
        );
    }

    /**
     * @Route("/usuario/{idUsuario}", name="userinfo")
     */
    public function indexUsuarioInfo($idUsuario) {
        // dump("Estamos viendo el usuario: ". $idUsuario);
        // die;
        return $this->render('@App/Usuario/index.html.twig', ["idUsuario" => $idUsuario]
        );
    }

    /**
     * @Route("/crear/usuario", name="crear_usuario")
     */
    public function indexNuevoUsuario (Request $request) {

        // creates a task and gives it some dummy data for this example
        $usuario = new Usuario();
        $usuario->setNombre('');
        $usuario->setUsername('');
        $usuario->setEmail('');
        $usuario->setContrasena('');
        $usuario->setTipoUsuario('');

//        $newuser->setUsername(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($usuario)
            ->add('nombre', TextType::class)
            ->add('username', TextType::class)
            ->add('email', TextType::class)
            ->add('contrasena', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'Las contraseñas no concuerdan.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' =>true,
                'first_options' => array('label' => 'Contraseña'),
                'second_options' => array('label' => 'Repetir Contraseña')
            ))
            ->add('tipo_Usuario', ChoiceType::class, array(
                'choices'  => array(
                    'Técnico' => 'tecnico',
                    'Normal' => 'normal'
                )
            ))
            ->add('save', SubmitType::class, array('label' => 'Crear Usuario'))
            ->getForm();



        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $usuario = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            return $this->redirectToRoute('lista_usuarios');
        }

        return $this->render('@App/Usuario/nuevo.html.twig', array(
            'form' => $form->createView(),
        ));
    }






    //Restful API
	/**
	 * @Route("/rest/usuariog", name="buscar_usuarios")
	 * @Method("GET")
	 */
	public function buscarUsuarios() {
		return null;
	}
	/**
	 * @Route("/rest/usuariog/{id}", name="buscar_usuario")
	 * @Method("GET")
	 * @param Request $request
	 * @param Usuario $usuario
	 */
	public function buscarUsuario(Usuario $usuario) {

        $jsonContent = $this->get('app.customserializer')->serializeJson($usuario, 'json');

        return new JsonResponse($jsonContent);
	}
	/**
	 * @Route("/rest/usuariog", name="guardar_usuario")
	 * @Method("POST")
	 * @param Request $request
	 */
	public function guardarUsuario(Request $request) {

		$data = $request->getContent();
		$data = json_decode($data, true);

		$usuario = new Usuario();
		$usuario->setNombre($data["nombre"]);
		$usuario->setUsername($data["username"]);

		$encoders = array(new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

		$em = $this->getDoctrine()->getManager();
		$em->persist($usuario);
		$em->flush();

        $jsonContent = $this->get('serializer')->serialize($usuario,'json');
        $jsonContent = json_decode($jsonContent, true);

        return new JsonResponse($jsonContent);
	}

	/**
	 * @Route("/rest/usuario/{id}", name="actualizar_usuario")
	 * @Method("PUT")
	 * @param Request $request
	 * @param Usuario $usuario
	 */
	public function actualizarUsuario(Request $request, Usuario $usuario) {

        $data = $request->getContent();
        $data = json_decode($data, true);
//var_dump($data);die;
        $usuario->setNombre($data["nombre"]);
        $usuario->setUsername($data["username"]);
        $usuario->setEmail($data["email"]);
        $usuario->setContrasena($data["pass"]);
        $usuario->setTipoUsuario($data["tipo"]);

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        $jsonContent = $this->get('app.customserializer')->serializeJson($usuario);

        return new JsonResponse($jsonContent);

	}



    /**
     * @Route("/rest/usuario/{id}", name="eliminar_usuario")
     * @Method("DELETE")
     */
    public function indexDeleteUsuario(Usuario $usuario) {

        $em = $this->getDoctrine()->getManager();

        $em->remove($usuario);
        $em->flush();

        return $this->redirectToRoute('lista_usuarios');
    }
}