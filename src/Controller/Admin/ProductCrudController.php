<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
//use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;

use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('name'),
            NumberField::new('price'),
            IntegerField::new('stock_quantity'),
            TextEditorField::new('description'),

            FormField::addPanel("Brand"),
            AssociationField::new('brand')
            ->setRequired(true)
            ->setHelp("Choise brand"),

            FormField::addPanel("Category"),
            AssociationField::new('category')
            ->setRequired(true)
            ->setHelp("Choise category"),

            ImageField::new('image_name')->setBasePath($this->getParameter('app.path.product_images'))->onlyOnIndex(),

            Field::new('imageFile')->setFormType(VichImageType::class)->onlyOnForms(),

        ];
    }

}
