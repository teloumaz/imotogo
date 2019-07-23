
		<div class="row" style="margin-bottom: 2%;">
			<div class="col-sm-12">
				<img src="<?php echo base_url('assets/apercues_imo/').$annonces->apercu1; ?>" style="width:100%;height:500px;border-radius:2px;">
			</div>
		</div>


<table class="table table-bordered table-striped">

	<thead>
		<th>Mode offre</th>
		<th>Date Publication</th>
		<th>Démarcheur</th>
		<th>Superficie</th>
		<th>Description détaillée</th>
		<th>Localisation</th>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $annonces->imo_modeofre; ?></td>
			<td><?php echo $annonces->annonce_date; ?></td>
			<td><?php echo $annonces->agence_nom; ?></td>
			<td><?php echo $annonces->imo_superficie; ?></td>
			<td><?php echo $annonces->annonce_descrip; ?></td>
			<td><?php echo $annonces->localisation; ?></td>
		</tr>
	</tbody>
</table>