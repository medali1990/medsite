<h1>Creation d'une news</h1>
<form action="{formurl 'medsite~default:createsave'}" method="POST">
{formurlparam}
<table>
	<tr>
		<th><label for="sujet">Sujet</label></th>
		<td><input type="text" id="sujet" name="sujet" /></td>
	</tr>
	<tr>
		<th><label for="texte">Texte</label></th>
		<td><textarea  id="texte" name="texte"></textarea></td>
	</tr>
	<tr>
		<th><label for="date">Date</label></th>
		<td><input type="date" id="date" name="date" ></td>
	</tr>
</table>
<div>
	<input type="submit" value="Valider" />
	<a href="{jurl 'medsite~default:index'}">Annuler</a>
</div>
</form>