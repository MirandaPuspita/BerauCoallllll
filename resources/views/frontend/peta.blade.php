@extends('frontend.layouts2.master')

@section('title', 'Peta')

@push('css')
@endpush

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    {{-- <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
        </div>
    </section> --}}
    <!-- End Breadcrumbs -->

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.13.0/css/ol.css" type="text/css">
        <style>
            .map {
                padding-top: 130px;
                height: 752px;
                width: 100%;
            }

            #ol-map {
                flex: 1 0 100%;
                height: 100%;
                width: 100%;
            }

            .ol-mouse-position {
                top: unset;
                bottom: 0;
                font-size: 12px;
                background: rgba(255, 255, 255, 0.8);
                padding: 3px 4px;
                border-top-left-radius: 2px;
                border-top-right-radius: 2px;
                right: 176px;
            }

            .ol-scale-bar,
            .ol-scale-line {
                left: 200px;
            }

            .ol-rotate {
                top: 40px;
            }

            .ol-zoom {
                top: unset;
                left: unset;
                right: 0.5em;
                bottom: 40px;
            }


            /* Popup */

            .ol-popup {
                position: absolute;
                background-color: white;
                box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
                padding: 15px;
                border-radius: 10px;
                border: 1px solid #cccccc;
                bottom: 12px;
                left: -50px;
                min-width: 280px;
            }

            .ol-popup:after,
            .ol-popup:before {
                top: 100%;
                border: solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none;
            }

            .ol-popup:after {
                border-top-color: white;
                border-width: 10px;
                left: 48px;
                margin-left: -10px;
            }

            .ol-popup:before {
                border-top-color: #cccccc;
                border-width: 11px;
                left: 48px;
                margin-left: -11px;
            }

            .ol-popup-closer {
                text-decoration: none;
                position: absolute;
                top: 2px;
                right: 8px;
            }

            .ol-popup-closer:after {
                content: "✖";
            }

            .layer-list-container {
                background: white;
                position: absolute;
                top: 0.5em;
                left: 0.5em;
                padding: 8px;
                border-radius: 4px;
                width: 230px;
                height: 470px;
                overflow-y: auto
            }

            .layer-list-toggle {
                position: absolute;
                top: 0.5em;
                left: 0.5em;

            }

            #layer-list {
                user-select: none;
                list-style: none;
                margin: 0;
                padding: 0;
            }

            #layer-list label {
                display: flex;
                align-items: center;
                gap: 4px;
            }

            #layer-list .legend {
                display: flex;
                align-items: center;
            }

            #infoContainer {
                display: none;
                background: white;
                position: absolute;
                top: 4.5em;
                right: 3em;
                padding: 8px;
                border-radius: 4px;
                width: 300px;
                max-height: 80vh;
                overflow-y: auto
            }

            #infoContainer h5,
            h6 {
                color: #000000;
            }

        </style>
        <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.13.0/build/ol.js"></script>
    </head>

    <body>

        <div id="map-wrapper" style="position: relative; height:100%; width:100%; display: flex;">

            <div id="map" class="map"></div>

            <button type="button" class="layer-list-toggle btn btn-sm btn-primary">
                <i class="fas fa-layer-group ti-layers"></i>
            </button>

            <!-- Menampilkan Simbol pada Legenda -->
            <div class="layer-list-container">
                <div class="d-flex align-items-center justify-content-between py-2">
                    <span class="mx-2">Legenda</span>
                    <button id="layer-list-close" type="button" class="btn btn-sm btn-text">
                        <i class="fas fa-times ti-close"></i>
                    </button>
                </div>
                <ul id="layer-list">
                    <li style="padding: 4px;">
                        <label>
                            <div class="legend">
                                <img src="{{ asset('frontend/images/icolahan.png') }}" style="width: 24px">
                            </div>
                            <input data-layer="perizinanbaru" type="checkbox" />
                            <span style="font-size: 12px">Perizinan Baru</span>
                        </label>
                    </li>
                    <li style="padding: 4px;">
                        <label>
                            <div class="legend">
                                <img src="{{ asset('frontend/images/ickuliner.png') }}" style="width: 24px">
                            </div>
                            <input data-layer="kuliner" type="checkbox" />
                            <span style="font-size: 12px">Perizinan Lama</span>
                        </label>
                    </li>
                    <li style="padding: 4px;">
                        <label>
                            <div class="legend">
                                <img src="{{ asset('frontend/images/ickuliner.png') }}" style="width: 24px">
                            </div>
                            <input data-layer="kuliner" type="checkbox" />
                            <span style="font-size: 12px">Titik WMP</span>
                        </label>
                    </li>
                    <li style="padding: 4px;">
                        <label>
                            <input data-layer="batas_admin" type="checkbox" />
                            <span style="font-size: 12px">Bondary Konsesi</span>
                        </label>
                        <div class="legend">
                            <img src="{{ url('frontend/images/legenda_admin.png') }}" style="width: 100%" alt="">
                        </div>
                    </li>
                    <li style="padding: 4px;">
                        <label>
                            <input data-layer="jalan" type="checkbox" />
                            <span style="font-size: 12px">Jaringan Jalan</span>
                        </label>
                        <div class="legend">
                            <img src="{{ asset('frontend/images/legenda_jalan.png') }}" style="width: 100%" alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.7.5/proj4.js"
                integrity="sha512-MMmVaQGDVI3Wouc5zT5G7k/snN9gPqquIhZsHgIIHVDlRgYTYGxrwu6w482iIhAq8n5R6+pcBgpGgxFFBz7rZA=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/build/ol.js"></script>

        <script type="text/javascript">
            // Menambahkan sistem proyeksi UTM 50N
            proj4.defs("EPSG:32749", "+proj=utm +zone=50 +north +datum=WGS84 +units=m +no_defs");
            ol.proj.proj4.register(proj4);

            //Menampilkan Legenda
            function renderLegend(styles, size = 24) {
                if (typeof styles === 'function') styles = styles(new ol.Feature(), Infinity);

                if (!Array.isArray(styles)) styles = [styles];
                styles = styles.sort((a, b) => Number(a.getZIndex()) - Number(b.getZIndex()));
                const legend = document.createElement('canvas');
                legend.width = size;
                legend.height = size;
                const context = legend.getContext('2d');

                for (const style of styles) {
                    const imageStyle = style.getImage();
                    if (imageStyle) {
                        imageStyle.load();
                        const anchor = imageStyle.getAnchor() || [0, 0];
                        const imageSize = imageStyle.getSize() || imageStyle.getImageSize() || [0, 0];
                        const image = imageStyle.getImage(1);
                        const origin = imageStyle.getOrigin();
                        const rotation = imageStyle.getRotation();
                        let scale = imageStyle.getScale();
                        if (!Array.isArray(scale)) scale = [scale, scale];

                        const width = imageSize[0];
                        const height = imageSize[1];
                        const anchorX = anchor[0] * scale[0];
                        const anchorY = anchor[1] * scale[1];
                        const originX = origin[0];
                        const originY = origin[1];
                        const x = size / 2 - anchorX;
                        const y = size / 2 - anchorY;

                        const w = width + originX > image.width ? image.width - originX : width;
                        const h = height + originY > image.height ? image.height - originY : height;

                        let transform = null;
                        if (rotation !== 0) {
                            const centerX = x + anchorX;
                            const centerY = y + anchorY;
                            transform = ol.transform.compose(ol.transform.create(), centerX, centerY, 1, 1, rotation, -centerX,
                                -
                                centerY);
                        }

                        try {
                            ol.render.canvas.drawImageOrLabel(context, transform, imageStyle.getOpacity(), image, originX,
                                originY, w, h, x, y,
                                scale);
                        } catch (error) {
                            console.error(error);
                        }
                        continue;
                    }

                    const fill = style.getFill();
                    const stroke = style.getStroke();
                    const strokeWidth = stroke?.getWidth() || 0;
                    const isLine = fill === null && stroke !== null;
                    const isPolygon = fill !== null && stroke !== null;
                    const shape = new ol.style.RegularShape({
                        points: isPolygon ? 4 : 2,
                        radius: (size + strokeWidth) / 2,
                        angle: (isLine ? 90 : 45) * Math.PI / 180,
                        fill,
                        stroke,
                    });
                    const shapeSize = shape.getSize();
                    context.drawImage(
                        shape.getImage(1),
                        (size - shapeSize[0]) / 2,
                        (size - shapeSize[1]) / 2,
                        shapeSize[0],
                        shapeSize[1],
                    );
                }

                return legend;
            }

            // membuat cluster style
            const createClusterStyle = (iconUrl, clusterColor) => (feature) => {
                const size = feature.get('features')?.length || 1;

                // Mendefinisikan cluster point
                let style;
                let textStyle;
                if (size > 1) {
                    textStyle = new ol.style.Text({
                        // font: '16px sans-serif',
                        fill: new ol.style.Fill({
                            color: '#fff'
                        }),
                        // stroke: new ol.style.Stroke({
                        //     color: '#000',
                        //     width: 1
                        // }),
                        text: size.toString()
                    });

                    style = new ol.style.Style({
                        image: new ol.style.Circle({
                            radius: 12,
                            fill: new ol.style.Fill({
                                color: clusterColor
                            }),
                            stroke: new ol.style.Stroke({
                                width: 2,
                                color: '#ffffff'
                            })
                        }),
                        text: textStyle
                    });
                } else {
                    style = new ol.style.Style({
                        image: new ol.style.Icon({
                            src: iconUrl,
                            scale: [0.04, 0.04],
                            anchor: [0.5, 1]
                        })
                    });
                }

                return style;
            }

            // Membuat object peta
            const map = new ol.Map({
                target: 'map',
                view: new ol.View({
                    center: [117.492148, 2.153291],
                    zoom: 12,
                    projection: 'EPSG:4326'
                }),

                controls: ol.control.defaults().extend([
                    // Menambahkan mouse position
                    new ol.control.MousePosition({
                        projection: 'EPSG:32749'
                    }),
                    // Menambahkan kontrol skala
                    new ol.control.ScaleLine({
                        bar: true,
                        text: true
                    }),
                    new ol.control.FullScreen({
                        source: 'map'
                    })
                ])
            });

            // Basemaps
            const gmapSource = new ol.source.XYZ({
                url: 'https://mt{0-3}.google.com/vt/?lyrs=m&x={x}&y={y}&z={z}&hl=id',
                crossOrigin: 'anonymous',
                attributions: 'Google Maps'
            });
            const gmapLayer = new ol.layer.Tile({
                source: gmapSource
            });
            map.addLayer(gmapLayer);

            const layer_perizinanbaru = new ol.layer.Vector({
                properties: {
                    nama: 'Perizinan Baru'
                },
                source: new ol.source.Cluster({
                    source: new ol.source.Vector({
                        format: new ol.format.GeoJSON(),
                        url: "/geojson/perizinanls"
                    }),
                }),
                style: createClusterStyle('/frontend/images/icolahan.png', '#0090ff'),
                zIndex: 5,
            });
            map.addLayer(layer_perizinanbaru);

            const layer_titikwmp = new ol.layer.Vector({
                properties: {
                    nama: 'Titik WMP'
                },
                source: new ol.source.Cluster({
                    source: new ol.source.Vector({
                        format: new ol.format.GeoJSON(),
                        url: "/geojson/wmp"
                    }),
                }),
                style: createClusterStyle('/frontend/images/ickuliner.png', '#0090ff'),
                zIndex: 5,
            });
            map.addLayer(layer_titikwmp);

            const layer_batas_admin = new ol.layer.Vector({
                properties: {
                    nama: 'Batas Admin',
                    disableInfo: true
                },
                source: new ol.source.Vector({
                    format: new ol.format.GeoJSON(),
                    url: "/geojson/konsesi"
                }),
                style: new ol.style.Style({
                    fill: new ol.style.Fill({
                        color: 'rgba(255,255,255,0.3)'
                    }),
                    stroke: new ol.style.Stroke({
                        width: 1,
                        color: '#000000',
                        lineDash: [8, 4]
                    })
                }),
                zIndex: 1
            });
            map.addLayer(layer_batas_admin);

            const layer_rtrwk = new ol.layer.Vector({
                properties: {
                    nama: 'RTRWK Berau 2016-2036',
                    disableInfo: true
                },
                source: new ol.source.Vector({
                    format: new ol.format.GeoJSON(),
                    url: "/geojson/rtrwk"
                }),
                style: new ol.style.Style({
                    fill: new ol.style.Fill({
                        color: 'rgba(255,255,255,0.3)'
                    }),
                    stroke: new ol.style.Stroke({
                        width: 1,
                        color: '#000000',
                        lineDash: [8, 4]
                    })
                }),
                zIndex: 1
            });
            map.addLayer(layer_rtrwk);

            const layer_dict = {
                // umkm: layer_umkm,
                // peternakan: layer_peternakan,
                perizinanbaru: layer_perizinanbaru,
                titikwmp: layer_titikwmp,
                // kuliner: layer_kuliner,
                // kerajinan: layer_kerajinan,
                // jasa: layer_jasa,
                // perdagangan: layer_perdagangan,
                rtrwk: layer_rtrwk,
                batas_admin: layer_batas_admin,
                // smce: layer_smce,
            };

            fetch(
                    'https://api.mapbox.com/styles/v1/geointelgk/cl26keti900gm14pi0gccnlit/wmts?access_token=pk.eyJ1IjoiZ2VvaW50ZWxnayIsImEiOiJja3lvZG56cWMwOXRuMnZtdXh2eGxrd2gzIn0.J8iJSTrCkUzqtz515K00Bw'
                )
                .then(res => res.text())
                .then(text => {
                    const parser = new ol.format.WMTSCapabilities();
                    const result = parser.read(text);
                    const options = ol.source.WMTS.optionsFromCapabilities(result, {
                        layer: 'cl26keti900gm14pi0gccnlit'
                    });
                    const layer_jalan = new ol.layer.Tile({
                        source: new ol.source.WMTS(options),
                        zIndex: 1,
                        // extent: [
                        //     110.3293895350000042,
                        //     -8.2053656880000005,
                        //     110.8395113499999951,
                        //     -7.7817176789999998
                        // ],
                    });
                    map.addLayer(layer_jalan);
                    layer_dict.jalan = layer_jalan;
                })

                .finally(() => {
                    const layerListEl = document.getElementById('layer-list');
                    layerListEl.querySelectorAll('input[type=checkbox]').forEach(checkbox => {
                        const namaLayer = checkbox.dataset.layer;
                        const layer = layer_dict[namaLayer];

                        // Check if layer is valid
                        if (!layer) return;

                        // Set checkbox state based on layer visibility
                        checkbox.checked = layer.getVisible();

                        // Add on layer visibility change listener
                        layer.on('change:visible', () => {
                            // Set checkbox state based on layer visibility
                            checkbox.checked = layer.getVisible();
                        });

                        // Add on checkbox click/change listener
                        checkbox.addEventListener('click', () => {
                            // Set layer visibility based on checkbox state
                            layer.setVisible(checkbox.checked);
                        });

                        if (layer instanceof ol.layer.Vector) {
                            try {
                                const legend = renderLegend(layer.getStyle());
                                const legendContainer = checkbox.parentElement.querySelector('.legend');
                                if (!legendContainer.children.length)
                                    legendContainer.append(legend)
                            } catch (err) {
                                console.log(err);
                            }
                        }
                    });
                });

            const layerListContainer = document.querySelector('.layer-list-container');
            const layerListToggle = document.querySelector('.layer-list-toggle');
            const layerListClose = document.getElementById('layer-list-close');

            layerListToggle?.addEventListener('click', () => {
                layerListContainer?.classList.remove('d-none');
            });

            layerListClose?.addEventListener('click', () => {
                layerListContainer?.classList.add('d-none');
            });

            // Menambahkan graticule
            const graticule = new ol.layer.Graticule({
                map,
                targetSize: 100,
                showLabels: true,
                lonLabelPosition: 0.96,
                latLabelPosition: 1,
                lonLabelFormatter: lon => {
                    const tmpCoordinate = [lon, 0];
                    const [x, y] = ol.proj.transform(tmpCoordinate, 'EPSG:4326', 'EPSG:32749');
                    return x.toFixed(4);
                },
                latLabelFormatter: lat => {
                    const tmpCoordinate = [108, lat];
                    const [x, y] = ol.proj.transform(tmpCoordinate, 'EPSG:4326', 'EPSG:32749');
                    return y.toFixed(4);
                }
            });

            // Mini Map
            const overviewMap = new ol.control.OverviewMap({
                view: new ol.View({
                    projection: 'EPSG:4326'
                }),
                collapsed: false,
                layers: [
                    new ol.layer.Tile({
                        source: gmapSource
                    })
                ]
            });
            map.addControl(overviewMap);
        </script>

    </body>

    </html>
@endsection

@push('js')
@endpush
