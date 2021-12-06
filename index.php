<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>
        R:
        <input name="r" type="range" value="100" min="0" max="255" oninput="this.nextElementSibling.value = this.value">
        <output>100</output>
    </label>
    <label>
        G:
        <input name="g" type="range" value="100" min="0" max="255" oninput="this.nextElementSibling.value = this.value">
        <output>100</output>
    </label>
    <label>
        B:
        <input name="b" type="range" value="100" min="0" max="255" oninput="this.nextElementSibling.value = this.value">
        <output>100</output>
    </label>
    <input type="submit">
</form>

<span style="background-color: rgb(<?=$_POST['r']?>, <?=$_POST['g']?>, <?=$_POST['b']?>)">Text</span>


