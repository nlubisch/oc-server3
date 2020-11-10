<?php

namespace Oc\Controller\App;

use Oc\Entity\SecurityRoleHierarchyEntity;
use Oc\Repository\SecurityRoleHierarchyRepository;
use Oc\Repository\SecurityRolesRepository;
use Oc\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @var SecurityRolesRepository
     */
    private $securityRolesRepository;
    /**
     * @var SecurityRoleHierarchyRepository
     */
    private $securityRoleHierarchyRepository;

    public function __construct(SecurityRolesRepository $securityRolesRepository, SecurityRoleHierarchyRepository $securityRoleHierarchyRepository)
    {
        $this->securityRolesRepository = $securityRolesRepository;
        $this->securityRoleHierarchyRepository = $securityRoleHierarchyRepository;
    }


    /**
     * @Route("/", name="index_index")
     */
    public function index(): Response
    {
        $roles = $this->securityRolesRepository->fetchBy([
            'role' => 'ROLE_ADMIN'
        ]);

        return $this->render('index/index.html.twig', [
            'roles' => $roles,
        ]);
    }

    /**
     * @Route("/unterseite", name="index_unterseite")
     */
    public function unterseite(): Response
    {
        $roleHierarchy = $this->securityRoleHierarchyRepository->fetchAll();

        return $this->render('index/unterseite.html.twig', [
            'roleHierarchy' => $roleHierarchy,
        ]);
    }
}
