<?php
namespace AppBundle\Controller\Usuario;

use AppBundle\Entity\Usuario;
use Doctrine\DBAL\Types\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;

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

        return $this->render('@App/Usuario/editar_usuario.html.twig',
            [
                "usuario" => $usuario
            ]
        );
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
     * @Route("/rest/usuario/{id}", name="eliminar_usuario")
     * @Method("DELETE")
     */
    public function indexDeleteUsuario(Usuario $usuario) {

        $em = $this->getDoctrine()->getManager();

        $em->remove($usuario);
        $em->flush();

        return $this->redirectToRoute('lista_usuarios');
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
     * $Route("/rest/usuario/crear", name="nuevo_usuario")
     * $Method("Post")
     * $param Request $request
     */
	public function nuevoUsuario(Request $request) {
        $usuario = new Usuario();
        $usuario->setNombre('Nuevo');
        $usuario->setUsername('El Nuevo');

        $form = $this->createFormBuilder($usuario)
            ->add('nombre', TextType::class)
            ->add('username', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Crear Usuario'))
            ->getForm();

        return $this->render('@App/Usuario/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}