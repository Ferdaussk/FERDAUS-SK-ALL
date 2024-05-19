<div class="bwdwi-count-down-28 bwdwi-count-down-common <?php echo  esc_attr__($unit_dir )?>">
				<input class="bwdwi-expired-time" type="text" hidden value="<?php echo esc_attr__($provided_date) ;?>">
				<input type="text" hidden class="bwdwi-ex-event"
						data-ex-msg="<?php echo esc_attr__($ex_show_msg) ;?>" 
						data-ex-url="<?php echo esc_attr__($ex_show_url) ;?>"
						value="<?php echo esc_attr__($af_ex_event) ;?>"
						/>
				<div class="bwdwi-count-down-item">
				<div class="bwdwi-count-down-num bwdwi-day bwdwi-shape-common">100</div>
				<div class="bwdwi-count-down-title"><?php echo esc_html__($day_unit_title)?></div>
				</div>
				<div class="bwdwi-count-down-item">
				<div class="bwdwi-count-down-num bwdwi-hour bwdwi-shape-common">20</div>
				<div class="bwdwi-count-down-title"><?php echo esc_html__($hour_unit_title)?></div>
				</div>
				<div class="bwdwi-count-down-item">
				<div class="bwdwi-count-down-num bwdwi-min bwdwi-shape-common">55</div>
				<div class="bwdwi-count-down-title"><?php echo esc_html__($min_unit_title)?></div>
				</div>
				<div class="bwdwi-count-down-item">
				<div class="bwdwi-count-down-num bwdwi-sec bwdwi-shape-common">22</div>
				<div class="bwdwi-count-down-title"><?php echo esc_html__($sec_unit_title)?></div>
				</div>
			</div>