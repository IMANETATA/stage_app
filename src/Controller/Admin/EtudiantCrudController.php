<?php

namespace App\Controller\Admin;

use App\Entity\Etudiant;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

//use EasyCorp\Bundle\EasyAdminBundle\Field\TextBlockField;
class EtudiantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Etudiant::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
        IdField::new('id')->onlyOnIndex()->setColumns(6),
        TextField::new('nom', 'Nom')->setColumns(6),
        TextField::new('prenom', 'Prénom')->setColumns(6),
        TextField::new('cne', 'CNE')->setColumns(6),
        TextField::new('adresse', 'Adresse')->setColumns(6),
        ];
    }
    
}
