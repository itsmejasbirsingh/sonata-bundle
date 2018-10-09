<?php
// src/Admin/BlogPostAdmin.php
namespace App\Admin;

use App\Entity\User;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;  



class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
        ->add('username', TextType::class, array( 'required' => true ))
        ->add('email', TextType::class)
        ->add('password', TextType::class)
        ->add('enabled', ChoiceType::class, array(
                        'choices'  => array(
                                'Yes' => '1',
                                'No' => '0',
                                
    ),
                ))
    	;

    }

    public function toString($object)
		    {
		        return $object instanceof User
		            ? $object->getUsername()
		            : 'Users'; // shown in the breadcrumb on the create view
		    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        	 ->addIdentifier('username')
        	 ->add('email')
             ->add('password')
             ->add('enabled')
        ;


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    { //Adding Filter/Search Options
        $datagridMapper
            ->add('username')
            ->add('email')
            
        ;
    }
}