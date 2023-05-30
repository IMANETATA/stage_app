<?php

namespace App\Controller\Admin;

use App\Entity\Module;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ModuleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Module::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
        IdField::new('id')->onlyOnIndex()->setColumns(6),
        TextField::new('nom', 'Nom')->setColumns(6),
        AssociationField::new('enseignant', 'Enseignant')->setColumns(6),
        AssociationField::new('filiere', 'Filière')->setColumns(6),
        AssociationField::new('semestre', 'Semestre')->setColumns(6),
        ];
    }
    
}
