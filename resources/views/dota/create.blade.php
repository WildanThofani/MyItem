<br /> <br />
<form method="POST" 
 action="/Dota">
 {{ csrf_field() }}

<input type="text" name="txt_id" />
<input type="text" name="txt_itemname" />
<input type="text" name="txt_price" />
<input type="image" name="txt_image" />
<input type="text" name="txt_seller" />
<input type="text" name="txt_phone" />

<br /> <br />
<input type="submit"
name="sbm_save"
id="sbm_save"
value="save" />
<br>
</form>