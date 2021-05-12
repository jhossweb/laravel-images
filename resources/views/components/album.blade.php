<div class="album py-5 bg-light">
	<div class="container">
	   	<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3">

	   		<div class="col">
	   			<div class="card shadow-sm">
	   				{{ $slotImg }}

	   				<div class="card-body">
	   						{{ $slot_category }}

		              	<p class="card-text">
		              		{{ $slotDescription }}
		              	</p>

		              	<div class="d-flex justify-content-between align-items-center col-sm-12">
		              		{{ $slot }}
		              	</div>

		            </div>
	   			</div>
	   		</div>

	   	</div>
	</div>
</div>