<?php

namespace WidgetsDolarVenezuela\Widgets;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit;

class WidgetsDolarVenezuela extends Widget_Base {
	public function get_name() {
		return 'DolarVenezuela';
	}
	public function get_title() {
		return __( 'Dolar Venezuela' );
	}
	public function get_icon() {
		return 'eicon-drag-n-drop';
	}
	public function get_categories(){
		return ['dt-widgets'];
	}
	protected function register_controls() {
		$this->start_controls_section(
			'section_dolarvenezuela',
			[
				'label' => 'Settings Dolar Venezuela',
			]
		);
		$this->add_control(
	      'dolarvenezuela_title',
	      [
	        'label' => __( 'Title', 'dolarvenezuela' ),
	        'type' => Controls_Manager::TEXT,
	        'placeholder' => __( 'Coloque el titulo', 'dolarvenezuela' ),
	        'default' => __('Dolar Venezuela', 'dolarvenezuela'),
	        'label_block' => true,
	      ]
	    );
	    $this->add_control(
	      'dolarvenezuela_api',
	      [
	        'label' => esc_html__( 'Get data Api', 'dolarvenezuela' ),
	        'type' => Controls_Manager::SELECT,
	        'default' => '1',
	        'options' => [
	          '2' => esc_html__( 'Dolar Today', 'dolarvenezuela' ),
	          '1' => esc_html__( 'Yadio', 'dolarvenezuela' ),
	        ],
	        'frontend_available' => true,
	      ]
	    );
	    $this->add_control(
	      'dolarvenezuela_view',
	      [
	        'label' => esc_html__( 'Template', 'dolarvenezuela' ),
	        'type' => Controls_Manager::SELECT,
	        'default' => '1',
	        'options' => [
	          '5' => esc_html__( '5', 'dolarvenezuela' ),
	          '4' => esc_html__( '4', 'dolarvenezuela' ),
	          '3' => esc_html__( '3', 'dolarvenezuela' ),
	          '2' => esc_html__( '2', 'dolarvenezuela' ),
	          '1' => esc_html__( '1', 'dolarvenezuela' ),
	        ],
	        'frontend_available' => true,
	      ]
	    );

		$this->end_controls_section();
		
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Style', 'dolarvenezuela' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
	      'modalButton_border_color',
	      [
	        'label' => esc_html__( 'Color texto', 'dolarvenezuela' ),
	        'type' => \Elementor\Controls_Manager::COLOR,
	        'selectors' => [
	          '{{WRAPPER}} .home-dolarvzl' => 'color: {{VALUE}}',
	        ],
	        
	      ]
	    );
	    $this->add_control(
	      'modalButton_border_color-hover',
	      [
	        'label' => esc_html__( 'Color icono', 'dolarvenezuela' ),
	        'type' => \Elementor\Controls_Manager::COLOR,
	        'selectors' => [
	          '{{WRAPPER}} .my-icon-wrapper-dolarvzl' => 'Color: {{VALUE}}',
	        ],
	        
	      ]
	    );

	    $this->add_control(
	      'modalButton_btn_align',
	      [
	        'label' => esc_html__( 'Alignment', 'dolarvenezuela' ),
	        'type' => Controls_Manager::CHOOSE,
	        'options' => [
	          'left'    => [
	            'title' => esc_html__( 'Left', 'dolarvenezuela' ),
	            'icon' => 'eicon-text-align-left',
	          ],
	          'center' => [
	            'title' => esc_html__( 'Center', 'dolarvenezuela' ),
	            'icon' => 'eicon-text-align-center',
	          ],
	          'right' => [
	            'title' => esc_html__( 'Right', 'dolarvenezuela' ),
	            'icon' => 'eicon-text-align-right',
	          ],
	        ],
	        'selectors' => [
	          '{{WRAPPER}} .home-dolarvzl' => 'text-align: {{VALUE}}',
	        ],
	      ]
	    );

		$this->end_controls_section();

		$this->start_controls_section(
			'section_dolarvenezuela_repeat',
			[
				'label' => 'Settings Dolar Venezuela content',
			]
		);

		$repeater_dolarvenezuela  = new \Elementor\Repeater();

		$repeater_dolarvenezuela->add_control(
			'dolarvenezuela_icon',
			[
				'label' => esc_html__( 'Icon Pesos', 'dolarvenezuela' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-dollar-sign',
					'library' => 'solid',
				],
			]
		);

	    $repeater_dolarvenezuela->add_control(
	      'dolarvenezuela_name',
	      [
	        'label' => __( 'Title', 'dolarvenezuela' ),
	        'type' => Controls_Manager::TEXT,
	        'placeholder' => __( 'Title', 'dolarvenezuela' ),
	        'default' => __( 'USD', 'dolarvenezuela' ),
	        'label_block' => true,
	      ]
	    );

	    $repeater_dolarvenezuela->add_control(
	      'dolarvenezuela_type',
	      [
	        'label' => esc_html__( 'Moneda', 'dolarvenezuela' ),
	        'type' => Controls_Manager::SELECT,
	        'default' => '5',
	        'options' => [
	          '3' => esc_html__( 'USD', 'dolarvenezuela' ),
	          '2' => esc_html__( 'EURO', 'dolarvenezuela' ),
	          '1' => esc_html__( 'PESO', 'dolarvenezuela' ),
	        ],
	        'frontend_available' => true,
	      ]
	    );

	    $this->add_control(
	      'dolarvenezuela_list',
	      [
	        'label' => __( 'Dolar Venezuela list', 'dolarvenezuela' ),
	        'type' => \Elementor\Controls_Manager::REPEATER,
	        'fields' => $repeater_dolarvenezuela->get_controls(),
	        'default' => [
	          [
	            'dolarvenezuela_name' => __( 'Dolar', 'dolarvenezuela' ),
	            'dolarvenezuela_type' => __( '3', 'dolarvenezuela' ),
	            
	          ],
	        ],
	        'title_field' => '{{{ dolarvenezuela_name }}}',
	      ]
	    );

		$this->end_controls_section();
	}
	protected function render(){
		$settings = $this->get_settings_for_display();
		/*echo "<pre>";
		print_r($decode); 
		echo json_last_error_msg(); // Print out the error if any
		echo "</pre>";*/
		?>
		<!-- HTML DESIGN HERE -->
		<div class="home-dolarvzl">
			<div class="presentation">
				<h6><?php echo esc_attr($settings['dolarvenezuela_title']); ?></h6>
			</div>
			<div class="currencies">
				<?php if ($settings['dolarvenezuela_list']){  ?>
					<?php if ($settings['dolarvenezuela_api'] == 2) { ?>
						<!-- Dolar today -->
						<?php 
							$api_url = 'https://s3.amazonaws.com/dolartoday/data.json';
							$response = $this->requestApi($api_url);
							$json = mb_convert_encoding($response, 'UTF-8', 'UTF-8');
							$data = json_decode($json, true);
						?>
	                    <?php foreach ($settings['dolarvenezuela_list'] as $value) {?>
							<div class="my-icon-wrapper my-icon-wrapper-dolarvzl" style="display:inline-block;">
								<?php \Elementor\Icons_Manager::render_icon($value['dolarvenezuela_icon'], [ 'aria-hidden' => 'true' ]); ?>
							</div>
							<?php echo esc_attr($value['dolarvenezuela_name']); ?> :
							<?php 
								if ($value['dolarvenezuela_type'] == 1) { echo esc_attr($data['USDCOL']['rate']); }
								elseif ($value['dolarvenezuela_type'] == 2) { echo esc_attr($data['EUR']['promedio']); }
								else { echo esc_attr($data['USD']['promedio']); }
								
							?>
	                    <?php } ?>
                	<?php } else { ?>
                		<?php foreach ($settings['dolarvenezuela_list'] as $value) {?>
							<div class="my-icon-wrapper my-icon-wrapper-dolarvzl" style="display:inline-block;">
								<?php \Elementor\Icons_Manager::render_icon($value['dolarvenezuela_icon'], [ 'aria-hidden' => 'true' ]); ?>
							</div>
							<?php echo esc_attr($value['dolarvenezuela_name']); ?> :
							<?php 
								if ($value['dolarvenezuela_type'] == 1) { 
									$api_url = 'https://api.yadio.io/rate/COP/USD';
									$response = $this->requestApi($api_url);
									$json = mb_convert_encoding($response, 'UTF-8', 'UTF-8');
									$data = json_decode($json, true);
									echo esc_attr(number_format($data['rate'], 2, ',', '.')); 
								}
								elseif ($value['dolarvenezuela_type'] == 2) { 
									$api_url = 'https://api.yadio.io/rate/VES/EUR';
									$response = $this->requestApi($api_url);
									$json = mb_convert_encoding($response, 'UTF-8', 'UTF-8');
									$data = json_decode($json, true);
									echo esc_attr(number_format($data['rate'], 2, ',', ' ')); 
								}
								else { 
									$api_url = 'https://api.yadio.io/rate/VES/USD';
									$response = $this->requestApi($api_url);
									$json = mb_convert_encoding($response, 'UTF-8', 'UTF-8');
									$data = json_decode($json, true);
									echo esc_attr(number_format($data['rate'], 2, ',', ' ')); 
								}
								
							?>
	                    <?php } ?>
                	<?php } ?>
                <?php } ?>
			</div>
			<p>Actualizado hasta el <b><i><?php echo esc_attr(date('d-m-y')); ?></i></b></p>
		</div>
		<!-- HTML END DESIGN HERE -->
		<?php
	}

	protected function requestApi($urlApi){
		$ch = curl_init();
	   	curl_setopt($ch, CURLOPT_URL, $urlApi); 
	   	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	   	curl_setopt($ch, CURLOPT_HEADER, 0); 
	   	$data = curl_exec($ch); 
	   	curl_close($ch); 
	   	return $data; 
	}
}