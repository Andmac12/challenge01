<?php 

/**
 *  @file
 *  Contains \Drupal\appform\Form\AppForm
 */

namespace Drupal\appform\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class AppForm extends FormBase {

    /**
     * {@inheritdoc}
     */
    public function getFormId() {
        return 'application_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $formState) {

        $form['application_form'] = array(
            '#title' => $this->t('Candidatura a Vaga na Bloom'),
            '#nome' => 'textfield',
            '#morada' => 'textfield',
        );

        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Save'),
        );

        return $form;
    }


}

?>