<?php

namespace App\Controller\Admin;

use App\Entity\AboutUs;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AboutUsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AboutUs::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
