<h2>
    Hello <?php echo $data; ?> <p style="color: red; display:inline">this is from PHP Tag</p>
    <br>
    Hello {{ $data }} <p style="color: green; display:inline    ">this from blade template</p>

    @if ($data == 'Mohamed')
        <h2>Hello Mohamed</h2>
    @else
        <h2>Hello anonmous</h2>
    @endif
</h2>
