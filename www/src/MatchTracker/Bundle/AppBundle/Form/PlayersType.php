<?php

namespace MatchTracker\Bundle\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlayersType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('name', 'text', array('attr' => array('placeholder' => 'Naam')))
				->add('age', 'integer', array('attr' => array('placeholder' => 'Leeftijd')))
				->add('number', 'integer', array('attr' => array('placeholder' => 'RugNr.')));
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults(array(
			'data_class' => 'MatchTracker\Bundle\AppBundle\Entity\Players',
		));
	}

	public function getName() {
		return 'player';
	}

}
