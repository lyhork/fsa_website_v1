<x-filament::page>
    {{-- {{dd($record->id)}} --}}
        <div class="col-md-2">
            <a href="" id="container" >{!!QrCode::size(200)->generate(env('APP_URL') .'/staff/'. $record->id)!!}</a><br/>
            <button id="download" class="mt-2 btn btn-info text-light" onclick="downloadSVG()">Download SVG</button>
        </div>
    <script>
        function downloadSVG() {
          const svg = document.getElementById('container').innerHTML;
          const blob = new Blob([svg.toString()]);
          const element = document.createElement("a");
          element.download = "staff.svg";
          element.href = window.URL.createObjectURL(blob);
          element.click();
          element.remove();
        }
    </script>

</x-filament::page>
