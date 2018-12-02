@extends('layouts._layout_no_vue')

@section('content')
<div class="container">
    <div class="spell-wrap">
    <div class="filter-block">
        <button style="margin-bottom:20px;" class="reset btn btn-info">Reset</button>
        <label>
            <div style="font-size:16px;font-weight:bold;">Search by school of magic</div>
            <button data-school="evocation" class="school-filter evocation btn btn-primary">Evocation</button>
            <button data-school="abjuration" class="school-filter abjuration btn btn-primary">Abjuration</button>
            <button data-school="conjuration" class="school-filter conjuration btn btn-primary">Conjuration</button>
            <button data-school="divination" class="school-filter divination btn btn-primary">Divination</button>
            <button data-school="enchantment" class="school-filter enchantment btn btn-primary">Enchantment</button>
            <button data-school="illusion" class="school-filter illusion btn btn-primary">Illusion</button>
            <button data-school="necromancy" class="school-filter necromancy btn btn-primary">Necromancy</button>
            <button data-school="transmutation" class="school-filter transmutation btn btn-primary">Transmutation</button>
        </label>
    </div>
    <table id="search-table" style="width:100%;">
        <thead>
            <tr>
                @foreach($spells[0]->getAttributes() as $key => $val)
                    @if(!in_array($key, $not_used))
                        
                        <th class="{{str_replace('_', ' ', $key)}} @if(in_array($key, $hide_rows)) none @endif ">{{ucfirst(str_replace("_", " ", $key))}}</th>
                    @endif
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($spells as $spell)
            <tr>
                @foreach($spell->getAttributes() as $key => $val)
                    @if(!in_array($key, $not_used))
                        @php if($key == "higher_level" && $val == "0"){ $val = ""; } @endphp
                        <td @if(in_array($key, $hide_rows)) class="none" @endif>
                            @if(!maybe_unserialize($val)){{$val}}
                            @else 
                                @foreach(maybe_unserialize($val) AS $new_val)
                                    {{$new_val}}
                                @endforeach
                            @endif
                        </td>
                    @endif
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">{{$spell->name}}</div>
            
            <div class="panel-body">
                <div><strong>Level:</strong> {{$spell->level}}</div>
                <div><strong>Concentration:</strong> {{$spell->concentration}}</div>
                <div><strong>Components:</strong> @foreach($spell->components() as $c) <span>{{$c}} </span>  @endforeach</div>
                <div><strong>Material Cost:</strong> {{$spell->materials}}</div>
                <div><strong>School:</strong> {{$spell->school}}</div>
                <div><strong>Range:</strong> {{$spell->range}}</div>
                <div><strong>Duration:</strong> {{$spell->duration}}</div>
                <div><strong>Casting Time:</strong> {{$spell->casting_time}}</div>
                <div><strong>Description:</strong> @foreach($spell->desc() as $desc) <div>{{$desc}}</div> @endforeach</div>
            </div>
        </div>
    </div> -->
        
    
    </div>
</div>
<script>
    var table = $("#search-table").DataTable({
        "responsive": true,
        "paging": true,
        "info":true,
        "ordering":true,
        columnDefs: [
            { responsivePriority: 1, targets: 0 }, //name
            { responsivePriority: 10000, targets: 1 }, //desc
            { responsivePriority: 100, targets: 2 }, //page
            { responsivePriority: 2, targets: 3 }, //school
            { responsivePriority: 3, targets: 4 }, //level
            { responsivePriority: 4, targets: 5 }, //range
            { responsivePriority: 5, targets: 6 }, // concentration
            { responsivePriority: 100, targets: 7 }, //material
            { responsivePriority: 100, targets: 8 }, //ritual
            { responsivePriority: 100, targets: 9 }, //classes
            { responsivePriority: 6, targets: 10 }, //casting_time
            { responsivePriority: 7, targets: 11 }, //duration
            { responsivePriority: 100, targets: 12 }, //components
            { responsivePriority: 100, targets: 13 } //higher_level
        ],
        "lengthMenu": [[25, 10, 50, -1], [25, 10, 50, "All"]]
    });

    $(".filter-block").on("click", ".school-filter", function(e){
        e.preventDefault();
        var school = $(this).text();
        
        table
            .columns(".school")
            .search(school)
            .draw();
    });

    $(".filter-block").on("click", ".reset.btn", function(e){
        e.preventDefault();
        table
            .search( '' )
            .columns().search( '' )
            .draw();
    });

    // $.fn.dataTable.ext.search.push(
    //     function( settings, data, dataIndex ) {
    //         if(data.includes("Evocation")){
    //             return true;
    //         }
    //         return false;
    //     }
    // );
</script>

<style>
    .filter-block{margin:100px 10px 50px 10px;}
</style>
@endsection