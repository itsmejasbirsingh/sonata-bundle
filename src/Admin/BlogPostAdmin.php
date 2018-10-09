<?php
// src/Admin/BlogPostAdmin.php
namespace App\Admin;

use App\Entity\Category;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
        ->add('title', TextType::class)
        ->add('body', TextareaType::class)
    	;

    	 $formMapper
        ->add('category', EntityType::class, [
            'class' => Category::class,
            'choice_label' => 'name',
        ])
    	;

    	$formMapper
        ->add('category', ModelType::class, [
            'class' => Category::class,
            'property' => 'name',
        ])
    	;

    }

    public function toString($object)
		    {
		        return $object instanceof BlogPost
		            ? $object->getTitle()
		            : 'Blog Post'; // shown in the breadcrumb on the create view
		    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        	->addIdentifier('title')
        	 ->add('category.name')
            ->add('draft')
        ;


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    { //Adding Filter/Search Options
        $datagridMapper
            ->add('title')
            ->add('category', null, [], EntityType::class, [
                'class'    => Category::class,
                'choice_label' => 'name',
            ])
        ;
    }
}