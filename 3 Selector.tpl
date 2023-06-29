<html>
<head>
<title>title</title>
</head>
<body>
<pre>
<select name=user>
{html_options values=$id output=$names selected="5"}
</select>
<br>
<select name=fruts>
   {html_options values=$id output=$fruts selected="1"}
</select>
<br>
<select name="languages">
    {html_options values=$id output=$languages selected="3"}
</select>
<br>
<select name="code">
    {html_options values=$id output=$code selected="4"}
</select>
</pre>
</body>
</html>