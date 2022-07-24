<table>
    @foreach ($cats as $cat)
    <tr>
        <td>{{$cat->products[0]->name}}</td>
    </tr>
    @endforeach
</table>