<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
      return $crud
      ->setEntityLabelInSingular('User')
      ->setEntityLabelInPlural('Users')
      ->setSearchFields(['email', 'role'])
      ;
    }
/*
    public function configureFilters(Filters $filters): Filters
    {
      return $filters
        ->add(EntityFilter::new('PRODUCT'))
        ;
    }


    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('PRODUCT');
        yield TextField::new('name');
        yield TextareaField::new('description');
        yield TextField::new('category');
        yield TextField::new('type');
        yield NumberField::new('price')->setNumDecimals(2);


    }
*/
}
