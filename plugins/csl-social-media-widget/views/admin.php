<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">

   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
    name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook URL:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" 
    name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter URL:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" 
    name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('instagram'); ?>">Instagram URL:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" 
    name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php echo $instagram; ?>">
   </p>


</div>
