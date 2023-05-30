<?php

namespace App\Controller\Admin;

use App\Entity\Note;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NoteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Note::class;
    }

    public function configureFields(string $pageName): iterable
{
    return [    
        IdField::new('id')->onlyOnIndex()->setColumns(6),
        AssociationField::new('etudiant', 'Étudiant')->setColumns(6),
        AssociationField::new('module', 'Module')->setColumns(6),
        NumberField::new('note', 'Note')->setColumns(6),
        TextField::new('observation', 'Observation')->setColumns(6),
        ];
    }
}
