<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
			<ul id="menu" class="menu">
			
				<li><a href="/home">Home</a></li>
				
       			<li><a href="/openehr_programs">Programs</a>
					<ul>
                		<li><a href="/programs/specification">&nbsp; Specification Program</a></li>
               			<li><a href="/programs/clinicalmodels">&nbsp; Clinical Models Program</a></li>
                		<li><a href="/programs/software">&nbsp; Software Program</a></li>
						<li><a href="/programs/localisation">&nbsp; Localisation Program</a></li>
					</ul>
        		</li>
				
       			<li><span>Entry Points</span>
            		 <ul>
               			<li><?php include "$root/entry_points/getting_started/menu.php"?>
						</li>
						<li><?php include "$root/entry_points/i_am_working_on/menu.php"?>
						</li>
            		 </ul>
       			</li>
				
				<li><?php include "$root/downloads/menu.php"?>
       			</li>
				
        		<li><?php include "$root/news_events/menu.php"?>
       			</li>
        	
				<li><?php include "$root/about/menu.php"?>
        		</li>

    		</ul>

