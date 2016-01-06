<h2>Dernières actualités</h2>
 <p>Ouverture prochaine de cette rubrique.by {$nom}</p>
 
 <table>
 	<tr>
 		<td>Sujet</td>
 		<td>texte</td>
 		<td>Date</td>
 	</tr>
 		{foreach $liste as $news}	
 		<tr>
	 		<td><p>{$news->sujet}</p></td>
	 		<td><p>{$news->texte}</p></td>
	 		<td><p>{$news->news_date}</p></td>
 		</tr>
 		{/foreach}
 </table>