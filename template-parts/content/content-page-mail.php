<div class="row mb-3 pb-3">
	<div class="container">
		<div class="col-xl-8 offset-xl-2" data-aos="fade-up" data-aos-anchor="#example-anchor" data-aos-offset="600" data-aos-duration="600">

			<h1 class="mt-3 mb-0">Mailconfiguratie</h1>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>'); 
			} ?>

		</div>
	</div>
</div> 

<div class="col-xl-7">
	<div data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-offset="400" data-aos-duration="400" class="entry-content-post block">
		<div class="container">
			<div class="inner">

				<p>Ik maak gebruik van Antagonist als mailprovider. Het sturen en versturen van de mail verloopt via een beveiligde verbinding. </p><p>Op deze pagina is te vinden hoe je de mail kan instellen op de telefoon of d.m.v. Outlook, of je eigen favoriete mail client.</p>

			</div>
		</div>
    </div>
</div>

<div class="col-xl-5">
	<?php get_template_part( 'template-parts/sidebar/sidebar-mail' ); ?>
</div>

<div class="col-xl-12">
	<div data-aos="fade-up" class="entry-content-post block">
		<div class="container">
			<div class="inner">

				<h2> Mailinstelling op iOS </h2>
				<p>Maak je gebruik van een iPhone of iPad? Dan is het nodig dat je de volgende stappen doorloopt om de mail werkend te krijgen.</p>

				<div class="col-md-6">
					<div class="text-block">
						<p><img src="/wp-content/uploads/2019/09/IMG_1972.png" alt="Mail type kiezen voor iOS">
						<div class="text-block">
							<h2>1. Mail type kiezen voor iOS</h2>
							<p>Kies voor de onderste instelling genaamd: 'Andere'.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="text-block">
						<p><img src="/wp-content/uploads/2019/09/IMG_1970.png" alt="Mail basisinstellingen">
						<div class="text-block">
							<h2>2. Mail serverinstellingen kiezen voor iOS</h2>
							<p>Hier een leuke tekst over hoe geweldig de website wel niet is.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="text-block">
						<p><img src="/wp-content/uploads/2019/09/IMG_1971.png" alt="Inkomende serverinstellingen">
						<div class="text-block">
							<h2>3. Inkomende server instellen</h2>
							<p>Voor de inkomende serverinstellingen is het belangrijk dat er wordt gekozen voor een SSL verbinden. Poort 993 is een verplichte poort die voor deze beveiligde verbinding wordt gebruikt. Ook moet je instellen dat die vraagt om gebruikersnaam en wachtwoord als dit mogelijk is.</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="text-block">
						<p><img src="/wp-content/uploads/2019/09/IMG_1969.png" alt="Uitgaande serverinstellingen">
						<div class="text-block">
							<h2>4. Uitgaande server instellen</h2>
							<p>Poort 465 is verplicht voor de uitgaande server. Mocht dit niet werken, dan kan je ook nog poort 587 proberen. Ook hier moet je kiezen voor een SSL verbinding met gebruikersnaam en wachtwoord.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>