<?php

/**
 * @file
 */
namespace Drupal\route_50\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a Custom Block
 * @Block(
 * id = "block_route_50",
 * admin_label = @Translation("route_50"),
 * )
 */
class route50 extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#markup' => $this->t('
<iframe src="https://ridewithgps.com/embeds?type=route&id=37105898&title=Ride%20to%20Rescue%2050KM&sampleGraph=true" style="width: 1px; min-width: 100%; height: 700px; border: none;" scrolling="no"></iframe>
      '),
    );

  }
}

