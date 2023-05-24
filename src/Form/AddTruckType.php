<?php

namespace App\Form;

use App\Entity\Trucks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddTruckType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void {
        $builder
            ->add('brand', null, ['label' => 'brand', 'label_attr' => ['class' => 'formLabel1'],])
            ->add('model', null, ['label' => 'model', 'label_attr' => ['class' => 'formLabel2'],])
            ->add('fuel_type', null, ['label' => 'fuel type', 'label_attr' => ['class' => 'formLabel3'],])
            ->add('price', null, ['label' => 'price', 'label_attr' => ['class' => 'formLabel4'],])
            ->add('submit', SubmitType::class, array('attr' => array('class' => 'save')));
    }



    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trucks::class,
        ]);
    }
}
?>
