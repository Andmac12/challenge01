<?php

namespace Drupal\welcome_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a ''Welcome Block' Block.
 * @Block(
 *   id = "welcome_block",
 *   admin_label = @Translation("Welcome Block"),
 *   category = @Translation("Custom Block")
 * )
 */
class WelcomeBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return [
            '#markup' => $this->welcome(),
            '#cache' => [
                'max-age' => 0,
            ],
        ];
    }

    private function welcome() {
        $get_hours = date('H');
    
        $result = 'Relógio : ' . date("h:i:sa") . '<br><br><br>';
        
        if ($get_hours >= 7 && $get_hours < 12 ) {
            $quote = 'Bom Dia!';
        } elseif ($get_hours >= 12 && $get_hours < 19) {
            $quote = 'Boa Tarde!';
        } else {
            $quote = 'Boa Noite!';
        }


        $result = $result . $quote . '</br>';
        $result = $result . '<i> Envia-nos a tua candidatura <a href="./node/add/candidaturas"> aqui </a>.</i></br>';
        

        return $result;
    }


}