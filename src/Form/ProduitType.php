<?php

namespace App\Form;

use App\Entity\Fournisseur;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('code')
            ->add('libelle')
            ->add('prix')
            ->add('quantite')
            ->add('taille', ChoiceType::class, ['choices' => [
                'XS' => 'XS',
                'S' => 'S',
                'M' => 'M',
                'L' => 'L',
                'XL' => 'XL'
            ]])
            ->add('couleur',ChoiceType::class, ['choices' => [
                'Bleu' => 'Bleu',
                'Blanc' => 'Blanc',
                'Noir' => 'Noir',
                'Rouge' => 'Rouge',
                'Jaune' => 'Jaune',
                'Vert' => 'Vert',
                'Rose' => 'Rose'
            ]])
            ->add('fournisseur', EntityType::class, ['class' => Fournisseur::class, 'choice_label' => 'libelle'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
