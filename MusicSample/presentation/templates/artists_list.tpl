{* artists_list.tpl *}
{load_presentation_object filename="artists_list" assign="obj"}

{if $obj->mArtists}
	<table id='GridView1' cellspacing='0' cellpadding='4' border='0' width='800'>
<!--	<thead>
	<tr style='color:White;background-color:#CD80F8;font-weight:bold;font-size:large;'>
		<th scope='col'>Artist</th>
		<th scope='col'>Albums</th>
	</tr>
	</thead>-->
	<tbody>
	{* Loop through the list of artists *}
	{section name=i loop=$obj->mArtists}
	<!--<tr class="{cycle values="odd,even"}">-->
    <tr>
		{* Generate a new artist in the list *}
		<td>
            {$obj->mArtists[i].artist}
		</td>
        <td>
        	<table>
            <tr>
            	{section name=j loop=$obj->mArtistAlbums[i]}
                <td>
                    {if $obj->mArtistAlbums[i][j].image neq ""}
            			<a href="?op=Details&album_id={$obj->mArtistAlbums[i][j].album_id}">      
							<img src="./images/{$obj->mArtistAlbums[i][j].image}"
                            	 alt="{$obj->mArtistAlbums[i][j].album_title}"
                        		height="50" width="50" />
            			</a>
                    	<br />
					{/if}
                </td>
                {/section}
            </tr>
            </table>
        </td>
	</tr>
	{/section}
	</tbody>
	</table>
{* End artists list *}
{/if}


