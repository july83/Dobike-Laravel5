<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder{
    
    public function run() {
            \DB::table('productos')->insert(array (
                //BICICLETAS
                ['nombre' => 'BICICLETA ORBEA OCCAM AM M-LTD 2016', 'descripcion' => 'La Occam AM M-LTD es una de las bicicletas de montaña más versátiles jamás fabricada. Plenamente capaz en terreno adverso con una geometría de trail pero con un peso de una bicicleta de competición XC gracias al cuadro OMR, la nueva Occam está hecha para una cosa y una cosa sólo: El ciclismo de montaña.
                    CUADRO Orbea Monocoque Race Carbon. Advanced Dynamics 140mm suspension with UFO technology. 27,5" wheels. Boost 12x148 rear axle. Trail III geometry. Internal cable routing. PF92 Press fit
                    AMORTIGUADOR Fox Float DPS Factory 3-Position Adjust EVOL LV Kashima custom tune 200x51mm
                    HORQUILLA Fox 34 Float Factory 140 FIT4 3-Position Adjust QR15 Kashima
                    PLATO Race Face Next SL 26x36t Boost (28T ring included)
                    DIRECCION FSA 1-1/8 - 1-1/2" Integrated
                    MANILLAR Race Face Next SL 35mm Riser 760mm
                    POTENCIA Race Face Turbine 35mm interface
                    MANETAS Shimano XTR M9000
                    FRENO Shimano XTR Trail M9020 Hydraulic Disc
                    CAMBIO Shimano XTR M9000 SGS Shadow Plus Direct Mount
                    CADENA Shimano HG900
                    PIÑON Shimano XT M8000 11-42t 11-Speed
                    RUEDA DT Spline XMC-1200 TLR 15/100mm CL
                    CUBIERTA Maxxis Ardent 2,25" TLR 60 Tpi Exo Dual
                    PEDALES N/A
                    TIJA SILLIN RockShox Reverb 31.6x385mm Stealth
                    SILLIN Fizik Gobi M5','precio' => '7099', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '1.jpg', 'categoria_id' => 1],
                ['nombre' => 'SCOTT SPARK 700 ULTIMATE 2016', 'descripcion' => 'CUADRO Spark Carbon / IMP tech. / HMX / Di2 ready BB92 / Carbon swingarm with 160PM U-Mono Link / Tapered Headtube IDS SL dropouts for 142x12mm Integ. battery / BB height adj. Recorrido Front 120mm Rear 120 - 85 - Lockout / Shock 190X50
                    HORQUILLA FOX 32 Float Factory iRD Air / Kashima FIT4 3-Modes 15mm QR axle / tapered steerer Lockout / reb. Adj. Amortiguador FOX eNude iRD / SCOTT custom w. travel / geo adj DPS 3 modes: Lockout - Traction Control - Descend / Kashima / reb. Adj. Sistema remoto FOX Electronic TwinLoc remote 3 modes front and rear
                    DIRECCIÓN Syncros FL1.5 / Tapered 1.5" - 1 1/8" semi integ. OD 50/61mm / ID 44/55mm
                    CAMBIO TRASERO Shimano XTR Di2 RD-M9050 SGS Shadow Plus Type / 22 Speed
                    DESVIADOR DELANTERO Shimano XTR Di2 FD-M9070 with SM-M905-E Adaptor
                    MANETAS DE CAMBIO Shimano XTR Di2 SL-M9050 Electronic shift switch
                    FRENOS Shimano XTR M9000 Disc 180/F and 160/Rmm SM-RT99 CL Icetech Rotor
                    BIELAS Shimano XTR FC-M9020-2 Hollowtech 2 / QF 168 36x26 T
                    PEDALIER Shimano SM-BB94-41A / shell 41x89.5mm
                    MANILLAR Syncros FL1.0 Carbon T-Bar Di2 T shape flat / 9° / 720mm Syncros Pro lock-on grips
                    POTENCIA Syncros FL1.0 7050 Carbon wrapped +6° / 31.8mm / 1 1/8"
                    TIJA Syncros FL1.0 Carbon / 31.6mm
                    SILLÍN Syncros XR1.0 / Carbon rails
                    BUJE DELANTERO Syncros XR1.0 CL / 15mm made by DT Swiss
                    BUJE TRASERO Syncros XR1.0 CL / 142x12mm / RWS axle 36T Rachet System / made by DT Swiss
                    CADENA Shimano CN-M900-11
                    CASSETTE Shimano XTR CS-M9000 11-40 T
                    RADIOS DT Swiss Aero Comp
                    LLANTAS Syncros XR1.0 Carbon 28 H / Carbon rim / Tubless ready
                    NEUMÁTICOS Schwalbe Rocket Ron EVO / 2.25 127EPI Kevlar Bead Tubeless Easy / PaceStar compound
                    PESO aprox KG 10.3 22.71', 'precio' => '11999', 'precio_oferta' => '6325', 'rebajas' => 1, 'imagen' => '2.jpg', 'categoria_id' => 1],
                ['nombre' => 'SCOTT SCALE 735 2016', 'descripcion' => 'CUADRO Scale Carbon IMP technology / Carbon / Tapered HT PM 160 Disc / BB92 IDS SL dropouts SDS Shock Damping System
                    HORQUILLA FOX 32 Float Performance Air FIT4 3-Modes 15mm QR axle / tapered steerer Lockout / reb. Adj. / 100mm travel Sistema remoto SCOTT RideLoc Remote Technology 3 modes / integ. clamp
                    DIRECCIÓN Syncros Pro / Tapered 1.5" - 1 1/8" Semi integ. OD 50/61mm / ID 44/55mm
                    CAMBIO TRASERO Shimano XT RD-M781 SGS Shadow Type / 20 Speed
                    DESVIADOR DELANTERO 700 Series: Shimano Deore FD-M618-E 900 Series: Shimano Deore FD-M618-H / 34.9
                    MANETAS DE CAMBIO Shimano Deore SL-M610 Rapidfire plus / 2 way release w/gear indicator
                    FRENOS Shimano M396 Disc 180/F and 160/Rmm SM-RT54 CL Rotor
                    BIELAS Shimano FC-M627 2-piece Design 700 Series: 38x24 T / 900 Series: 36x22 T
                    PEDALIER Shimano BB-MT500-PA / shell 41x89.5mm
                    MANILLAR Syncros FL2.0 T-Bar Alloy 6061 / T shape Flat / 9° / 720mm
                    POTENCIA Syncros FL2.0 6061 Alloy / oversize 31.8mm 1 1/8" / 6° angle
                    TIJA Syncros FL2.0 700 Series: 31.6mm / 900 Series: 34.9mm
                    SILLÍN Syncros XR2.5
                    BUJE DELANTERO Formula CL71 / 15mm
                    BUJE TRASERO Shimano FH-M615 Disc CL / RWS
                    CADENA KMC X10
                    CASSETTE Shimano CS-HG50-10 11-36 T
                    RADIOS Stainless Black 15G / 1.8mm
                    LLANTAS Syncros X-21 / Eyelets / 32H
                    NEUMÁTICOS Schwalbe Rocket Ron / 2.1 67EPI Kevlar Bead / Dual compound Performance Series
                    PESO aprox KG 10.9', 'precio' => '2299', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '3.jpg', 'categoria_id' => 1],
                ['nombre' => 'ORBEA ALMA 29 M-LTD 2016', 'descripcion' => 'Alma M-LTD, el cenit de la velocidad, el cuadro Alma OMR no sólo está emparejado con el mundialmente reconocido conjunto electrónico XTR Di2, sino también con la horquilla electrónica Fox Float.
                    CUADRO Orbea Monocoque Race Carbon. Patented 4x4 evo construction. DCR Internal cable routing. XC racing geometry. Tapered Head tube. PF92 Press fit. Direct post mount disc brake. Di2 Ready.
                    HORQUILLA Fox 32 Float Factory 100 iRD electronic 3-Position Remote QR15 Kashima
                    PLATO Shimano XTR M9000 26x36t
                    DIRECCION FSA 1-1/8 - 1-1/2" Integrated
                    MANILLAR FSA K-Force Flat 700mm Di2 ready
                    POTENCIA FSA OS-99 CSI
                    MANETAS Shimano XTR Di2 M9000
                    FRENO Shimano XTR Race M9000 Hydraulic Disc
                    CAMBIO Shimano XTR Di2 GS Shadow Plus
                    DESVIADOR Shimano XTR Di2 M970 34-38t
                    CADENA Shimano HG900
                    PIÑON Shimano XTR M9000 11-40t 11-Speed
                    RUEDA Mavic Crossmax SL Pro TL 6-Bolt
                    CUBIERTA Maxxis Ikon 2.20" TLR 120 TPI 3C Exo
                    PEDALES N/A
                    TIJA SILLIN FSA K-Force Light SB0 27.2x400mm Di2
                    SILLIN Selle Italia SLR XC Gel Flow
                    DISPLAY Shimano XTR Di2', 'precio' => '7999', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '4.jpg', 'categoria_id' => 1],
                ['nombre' => 'GIANT TCR ADVANCED SL 1 2016', 'descripcion' => 'CUADRO
                    Tallas S, M, ML, L ??
                    Colores Comp/Rojo/Naranja
                    Cuadro Advanced SL-Grade Composite
                    Horquilla Advanced SL-Grade Composite, Full-Composite OverDrive 2 Steerer
                    COMPONENTES Manillar Giant Contact SLR, full-composite
                    Potencia Giant Contact SLR, ±8-degree rise, full-composite, Ti bolts
                    Tija de sillín Integrated
                    Sillín Giant Contact SLR forward, carbon rail
                    TRANSMISIÓN Manetas de cambio Shimano Ultegra Di2, 11-speed
                    Desviador Shimano Ultegra Di2, 11-speed
                    Cambio trasero Shimano Ultegra Di2, 11-speed
                    Frenos Shimano Ultegra
                    Palancas de frenos Shimano Ultegra Di2
                    Cassette Shimano Ultegra 11-28, 11s
                    Cadena KMC X11SL, 11s
                    Juego de platos y bielas Shimano Ultegra, 36/52
                    Caja de pedalier Shimano BB71, Press Fit
                    RUEDAS Llantas Giant SLR 0 DBL WheelSystem, ultralight full-carbon 30mm rims, clincher, Tubeless compatible
                    Bujes Giant SLR 0 DBL WheelSystem, Giant alloy, sealed bearings, Star Ratchet hub driver, [F] 16H, [R] 21H
                    Radios DT Aerolite/Aerocomp, Straight pull, Dynamic Balanced Lacing, alloy locking nipples
                    Cubiertas Giant P-SLR1, Front and Rear Specific, 700x23, Folding', 'precio' => '5699', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '5.jpg', 'categoria_id' => 1],
                //COMPONENTES
                ['nombre' => 'GIANT TCR ADVANCED SL 1 2016', 'descripcion' => 'CUADROTallas S, M, ML, L ??Colores Comp/Rojo/NaranjaCuadro Advanced SL-Grade CompositeHorquilla Advanced SL-Grade Composite,'
                    . ' Full-Composite OverDrive 2 SteererCOMPONENTESManillar Giant Contact SLR, full-compositePotencia Giant Contact SLR, ±8-degree rise, full-composite, Ti boltsTija de sillín'
                    . ' IntegratedSillín Giant Contact SLR forward, carbon railTRANSMISIÓNManetas de cambio Shimano Ultegra Di2, 11-speedDesviador Shimano Ultegra Di2, 11-speedCambio trasero Shimano '
                    . ' Ultegra Di2, 11-speedFrenos Shimano UltegraPalancas de frenos Shimano Ultegra Di2Cassette Shimano Ultegra 11-28, 11sCadena KMC X11SL, 11sJuego de platos y bielas Shimano Ultegra,'
                    . ' 36/52Caja de pedalier Shimano BB71, Press FitRUEDASLlantas Giant SLR 0 DBL WheelSystem, ultralight full-carbon 30mm rims, clincher, Tubeless compatibleBujes Giant SLR 0 DBL WheelSystem,'
                    . ' Giant alloy, sealed bearings, Star Ratchet hub driver, [F] 16H, [R] 21HRadios DT Aerolite/Aerocomp, Straight pull, Dynamic Balanced Lacing, alloy locking nipplesCubiertas Giant P-SLR1,'
                    . ' Front and Rear Specific, 700x23, Folding', 'precio' => '235', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '6.jpg', 'categoria_id' => 2],
                ['nombre' => 'SHIMANO CASSETTE XTR 11V 11/40', 'descripcion' => 'Cassette Shimano XTR 11v 11/40 Cassette de amplio rango de 11 velocidades.
                    Construcción Multi-spider.Perfil de dientes específico HG-X11.Progresión de ritmo de marchas: 11-13-15-17-19-21-24-27-31-35-40.
                    Dientes de titanio, aluminio y acero.Compatible con cuerpo actual FH.Peso aproximado 331g', 'precio' => '214.95', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '7.jpg', 'categoria_id' => 2],
                ['nombre' => 'MAVIC CROSSMAX SL PRO LTD WTS 27.5 / 29 JGO.', 'descripcion' => 'Juego de ruedas Mavic Crossmax SL Pro Ltd WTS 27.5
                    -El Sistema Rueda-Neumático UST de mejor respuesta y más rápida aceleración La menor inercia: llanta ISM 4D, neumáticos UST Tubeless Ready
                    Rigidez: llanta de 19 mm, compatible con eje pasante, Fore, Zicral Transmisión de energía eficiente: ITS-4, Isopulse, UST Taqueado rodador, compuesto X-mix
                    -Fiabilidad y facilidad de uso del sistema Mavic UST Facilidad de uso: estandard UST listo para montar Tecnologías Mavic probadas en competición: UST, SUP, Fore, ITS-4, QRM+ Neumáticos UST Tubeless Ready: construcción más ligera, mayor velocidad
                    -Un modelo cubre todas las necesidades Para competir en la World Cup y montar rápido por senderos Amplia compatibilidad de bujes: 9/15 y 9/12x135/142, Sram XD y Shimano 11s
                    Compuesto X-mix: el equilibrio perfecto entre agarre, velocidad y fiabilidad
                    Detalles: LLANTAS Material: Maxtal Unión: SUP Taladros: Fore Perfil específico para freno de disco Aligeramiento: ISM 4D Diámetro del orificio para la válvula: 6,5 mm
                    Neumático: UST Tubeless y con cámara Anchura interior: 19 mm Medida ETRTO de neumático recomendada: 1,5 a 2,3 RADIOS Material: Zicral Tipo: recto, perfilado Cabecillas: integradas Fore en aluminio Cantidad: 20 delante y detrás Radiado: a 2 cruces delante, detrás Isopulse
                    BUJES Cuerpo delantero: carbono con alas de aluminio Núcleo trasero: aluminio Material del eje: aluminio Rodamientos sellados ajustables Rueda libre: ITS-4 aluminio Compatible con Shimano 11v
                    Compatible Sram XD (XX1-X01) con kit opcional NEUMÁTICO Crossmax Pulse UST Tubeless Ready Banda de rodadura delante y detrás: Dual Compound Tejido de la carcasa: 127 TPI Medida 27,5": 2,10 Medida 29": 2,10 VERSIONES - DELANTERA
                    6 tornillos cierre rápido y 15 mm Lefty Supermax (2.0) VERSIONES - TRASERA 6 tornillos cierre rápido, 12x135 y 12x142 Asimétrica / Aiuminio Núcleo HG o XD ENTREGADA CON Cierres rápidos BX601 1 envase de sellante Mavic
                    Válvula UST y accesorios Adaptadores para cierre rápido (rueda delantera) Adaptadores para cierre rápido (rueda trasera) Adaptadores 12x142 mm para eje trasero Tornillos específicos para freno de disco Llave de ajuste multifunción Guía del usuario',
                    'precio' => '800', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '8.jpg', 'categoria_id' => 2],  
                ['nombre' => 'HORQUILLA FOX FLOAT 27.5 120 15QR', 'descripcion' => 'Horquilla Fox Float 27.5 120 15QR 
                    La horquilla Fox Float 32 ha sido diseñada para la modalidad de XC. Esta horquilla destaca por su polivalencia, ligereza y fiabilidad. Incorpora el muelle Float y el cartucho hidráulico FIT4 que ofrece un control excepcional, al evitar la formación de burbujas de aire en el aceite tras los impactos continuados.
                    Diámetro de rueda: 27.5" Amortiguación: Muelle de aire Float Tipo de uso: XC, Trail, Maratón. Recorrido: 120 mm. Eje: 15QR x 100 Mando remoto: Opcional Recorrido regulable: NO. Cartucho hidraúlico: Sí.
                    Peso: N/D Ancho de eje: 100 MM. Ajustes: NEW FIT4 3-Position Lever w/Open Mode Adjust Acabado barras: Anodized aluminium',
                    'precio' => '824', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '9.jpg', 'categoria_id' => 2],
                ['nombre' => 'PEDALES SHIMANO M-530 ENDURO SPD NEGRO', 'descripcion' => 'Peso 456g EAN 4524667692591 Serie PD-M530 Color Negro Modalidad MTB Disciplina XC - Cross country Material eje CroMo Tipo de calas SPD Calas incluidas Sí',
                    'precio' => '42.90', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '10.jpg', 'categoria_id' => 2],
                //ACCESORIOS
                ['nombre' => 'POLAR M450 HR', 'descripcion' => 'GPS Polar M450 HREl nuevo Polar M450 es la herramienta perfecta para todos los aficionados del ciclismo independientemente de sus objetivos o condición física. Su diseño es de alta calidad,'
                    . ' ligero y aerodinámico e incluye una luz led frontal que incrementa la seguridad del ciclista.Gracias a las exclusivas funciones Smart Coaching de Polar, el M450 se ajusta a las necesidades del ciclista y genera un completo feedback personalizado. '
                    . 'Tras realizar el Fitness Test y el Orthostatic Test, el M450 ofrece una guía personalizada para optimizar el entrenamiento y maximizar el rendimiento.Equipado con la más avanzada tecnología GPS, el nuevo bike computer garantiza la máxima precisión,'
                    . ' rapidez de localización de satélites y el menor consumo de batería. En línea con los últimos productos lanzados por Polar, el M450 incorpora la tecnología Bluetooth® Smart y por tanto es compatible con el sensor de frecuencia cardíaca H7 HR, los sensores'
                    . ' Bluetooth® Smart de velocidad y cadencia y con el medidor de potencia Polar Look Kéo Power. Esta tecnología lo hace compatible también con la App. Polar Flow (iOS y Android) permitiendo un rápido análisis del entrenamiento en el móvil. Para un análisis más detallado,'
                    . ' planificación de entrenamientos, configuración de pantallas o para revivir el entrenamiento realizado a través de un video generado automáticamente, el servicio web Polar Flow es el complemento ideal.El Polar M450 es customizable en todos los aspectos; la carcasa'
                    . ' posterior en diferentes colores para ir a juego con la bici o la equipación, las pantallas de información para cada perfil de deporte (carretera, mtb, pista...) con hasta 4 datos por pantalla y hasta 8 pantallas.Funciones destacadas del Polar M450:-GPS integrado-Sensor'
                    . ' barométrico-Tecnología Bluetooth® Smart-Luz led frontal-Ligero y aerodinámico-Pantallas configurables (hasta 4 datos por pantalla, hasta 8 pantallas)-35h de memoria-Batería recargable, 18h autonomía-Software actualizable-Función Back To Start-Carcasas de colores'
                    . ' intercambiables-Compatible con Polar Flow (App y servicio web)-Incluye banda',
                    'precio' => '200', 'precio_oferta' => '152', 'rebajas' => 1, 'imagen' => '11.jpg', 'categoria_id' => 3],
                ['nombre' => 'ELITE ARION MAG ROLLER', 'descripcion' => 'Rodillo Elite Arion Mag - Resistencia magnética integrada a 3 niveles  - Rodillos en forma parabólica para un mayor control del pedaleo - Ligero y con cierre Rodillo Elite Arion Mag, moderno y funcional,'
                    . ' permite optimizar el entrenamiento gracias a sus tres niveles de resistencia magnética integrada con imanes de neodimio de última generación. Los rodillos tienen forma parabólica, con diámetro de 85 mm en el centro y 100 a los lados, para un mayor control'
                    . ' del pedaleo y equilibrio. Máximo control y facilidad de la pedalada, la rueda es guiada hacia el centro del rodillo. La superficie completamente lisa de material plástico antiestático reduce el ruido y el desgaste del neumático. La tarima integrada en la'
                    . ' estructura permite montarse y apearse de la bicicleta fácilmente. Compatible con bicicletas de carretera o MTB. Su diseño compacto y plegable permite montarlo y desmontarlo en un solo gesto. Dimensiones: abierto 141 × 49.5 × 16 cm, cerrado 73 × 49,5 × 22 cm.',
                    'precio' => '275.95', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '12.jpg', 'categoria_id' => 3],
                ['nombre' => 'PARKTOOL CAJA DE HERRAMIENTAS AK-38', 'descripcion' => 'Caja de Herramientas AK-38
                    El kit avanzado de herramientas de mecánico AK-38 cuenta con herramientas de la misma calidad que puedes encontrar en los talleres de mecánicos profesionales. Las herramientas vienen en una resistente caja de copolímero. El kit AK-38 incluye todas las herramientas que se utilizan con mayor frecuencia, así como algunos elementos de los que un mecánico no puede prescindir. Esto significa básicamente todo lo necesario para realizar la mayoría de tareas de reparación y mantenimiento, desde ajustes de freno a revisiones de dirección, en la mayoría de modelos de bicicleta actuales.
                    Contenido del AK-38:
                    Juego de llaves hexagonales AWS -1 4 / 5 / 6 mm
                    Juego de llaves hexagonales AWS -3 2 / 2,5 / 3 mm
                    Eje del pedalier BBT-9 para cazoletas de sistema de bielas externo con 16 ranuras (SRAM, Shimano, FSA, Truvativ, Race Face, Zipp, etc.)
                    Herramienta para eje pedalier de cartucho BBT-22 (para ranuras internas de 20 dientes, como Shimano®, FSA®, etc.).
                    Abridor de botellas BO-2
                    Llave con extremo abierto CBW-1 8 y 10 mm
                    Llave con extremo abierto CBW-4 de 9 y de 11 mm
                    Indicador de desgaste de cadena Chain Checker CC-3.2
                    Lubricante cadena mezcla sintético Cl-1.
                    Limpiador de cadenas Cyclone CM-5.2
                    Cortador de cable y carcasa CN-10
                    Llave para tuercas de plato CNW-2
                    Herramienta profesional tipo tornillo para cadena CT-3.2
                    Extractor de biela CWP-7 para Octalink® acanalado, ISIS Drive® y tipo cónico-cuadrado
                    Herramienta de sujeción de anillo de cassette para Shimano y marcas similares FR-5®
                    Pincel GearClean GSC-1
                    Herramienta hexagonal de 8 mm HT-8
                    Grasa PolyLube 1000 PPL-1
                    Llave para pedal PW-3
                    Llave de cono taller profesional SCW-13 de 13 mm
                    Llave de cono taller profesional SCW-14 de 14 mm
                    Llave de cono taller profesional SCW-15 de 15 mm
                    Llave de cono taller profesional SCW-16 de 16 mm
                    Llave de cono taller profesional SCW-17 de 17 mm
                    Llave de cono taller profesional SCW-18 de 18 mm
                    Llave de cono taller profesional SCW-19 de 19 mm
                    Destornillador taller SD-0 Phillips 0
                    Destornillador taller SD-2 Phillips 2
                    Destornillador taller hoja recta SD-3, puntas de 3 mm
                    Destornillador taller hoja recta SD-6, puntas de 6 mm
                    Latiguillo para cadenas/herramienta de extracción de piñones SR-11 compatible 5 a 11 velocidades
                    Llave profesional para radios SW-0
                    Llave profesional para radios SW-2
                    Protector de neumático TB-2
                    Palancas de cubierta Tl-6
                    Llave TWS-3 de tres direcciones T10, T25, T30: compatible con Torx®
                    Kit de parches de vulcanización VP-1
                    ',
                    'precio' => '382', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '13.jpg', 'categoria_id' => 3],
                ['nombre' => 'TOPEAK SIDEKICK WEDGE PACK 0.7 l', 'descripcion' => 'Bolsa sillín Sidekick Wedge Pack 0.7 l
                    No es la típica bolsa de sillín. Se acabó meter la cámara a empujones. Tendrás tus repuestos ordenados y con un acceso inmediato gracias a su apertura lateral.
                    Dispone de red para la multiherramienta, reflectante y el sistema de anclaje QuickClik® para montarla y desmontarla en un segundo.
                    Capacidad: 0,7 l. (herramientas no incluidas)',
                    'precio' => '33.90', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '14.jpg', 'categoria_id' => 3],
                ['nombre' => 'SPECIALIZED COMBO 2', 'descripcion' => 'Bomba Specialized Air Tool COMBO2
                    Combinación de bombona de aire comprimido y bomba manual.
                    -Usa bombona roscada de 16g
                    -La bombona se guarda en el interior de la bomba (se puede utilizar con el cartucho dentro)
                    -No se desperdicia aire comprimido gracias a su gatillo regulador
                    -Rosca Schrader con adaptador Presta',
                    'precio' => '38', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '15.jpg', 'categoria_id' => 3],
                //ROPA
                ['nombre' => 'SCOTT ENDURANCE PLUS', 'descripcion' => 'Maillot Scott Endurance Plus
                    Cremallera integral en la parte delantera te permite controlar fácilmente la temperatura corporal y garantiza un gran confort en todo momento.
                    3 bolsillos traseros ofrecen espacio suficiente para guardar lo que necesites.',
                    'precio' => '69', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '16.jpg', 'categoria_id' => 4],
                ['nombre' => 'MAVIC COSMIC ELITE THERMO', 'descripcion' => 'Culote Mavic Cosmic Elite Thermo
                    Culotte de invierno de corte ajustado, aislado en las zonas clave para mayor calidez
                    La construcción Warm Tech de doble capa proporciona calidez y excelente ajuste al cuerpo. El tejido cardado estratégicamente situado proporciona calor sin restringir la transpirabilidad.',
                    'precio' => '150', 'precio_oferta' => '135', 'rebajas' => 1, 'imagen' => '17.jpg', 'categoria_id' => 4],
                ['nombre' => 'ENDURA MAVIC CROSSMAX SL PRO CARBON', 'descripcion' => 'Zapatillas Mavic Crossmax SL Pro Carbon
                    Zapatilla de gama alta para competición de Cross-country. La Crossmax SL Pro Carbon es realmente una zapatilla de competición, pero con un toque más práctico y flexible que una “100% carreras”. Esta zapatilla de MTB dispone de una suela Energy Grip Terra Carbon para que no se pierda la energía, y mantiene el talón bien sujeto gracias al Energy Lock. También tiene más tacos que una zapatilla de competición pura, en goma Contragrip® de gran agarre, para cuando toca echar pie a tierra. Mavic no se ha aolvidado tampoco el trinquete Ergo Ratchet para un ajuste preciso, y una plantilla Ergo Fit 3D+ Ortholite® que sujeta el pie cómodamente. 
                    - Entregadas con tacos desmontables para seco
                    - Entregadas con tacos para terreno seco o embarrado y llave
                    - Entregadas con placas metálicas protectoras
                    - Soporte para trinquete de perfil bajo con dos posiciones
                    - Detalles reflectantes
                    - Suela Contagrip',
                    'precio' => '220', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '18.jpg', 'categoria_id' => 4],
                ['nombre' => 'ENDURA GUANTES DELUGE', 'descripcion' => 'Guantes Endura Deluge
                    -Guante con membrana interior impermeable y transpirable con las costuras selladas
                    -Membrana interior impermeable y transpirable con las costuras selladas
                    -Tejido exterior de Cordura®/Supplex®
                    -Forro interior de secado rápido
                    -Puño doble elástico e impermeable
                    Palma de suedette con colchones de gel
                    -Inserciones de silicona en la palma y en los dedos para un mejor agarre
                    -Refuerzo entre pulgar y dedo índice
                    -Piezas reflectantes incluyendo un panel reflectante en el nudillo
                    -Pieza absorbente en dedo índice para secar el sudor
                    Construcción
                    Nylon 75%
                    Poliéster 15%
                    Poliuretano 5%
                    Elastano 5%',
                    'precio' => '52.99', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '19.jpg', 'categoria_id' => 4],
                ['nombre' => 'ENDURA BENITA', 'descripcion' => 'Gafas Endura Benita
                    Máxima adaptabilidad a la cara con las patillas flexibles y un plus de comodidad con la ventilación del apoyo nasal.
                    -Lentes Fotocromáticas Anti-Vaho
                    -1 lente de luz fotocromáticas que se adaptan a una amplia gama de cambio de las condiciones de luz
                    -Acabado antiniebla resistente a la nebulización en el interior de la lente
                    -Patillas flexibles
                    -Pieza de la nariz con ventilación para el máximo confort
                    -Se suministra con funda dura y bolsa de transporte suave de microfibra
                    -Protección 100% de los rayos UV EN1836',
                    'precio' => '99.99', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '20.jpg', 'categoria_id' => 4],
                //NUTRICION
                ['nombre' => 'NUTRIXXION ENDURANCE 2200', 'descripcion' => 'Bebida Nutrixxion Endurance 2200
                    Esta bebida para deportistas rica en Carbohidratos garantiza una ingesta de Lìquidos y se encarga de suministrar la Alimentacion óptima durante el esfuerzo. Además de una mezcla equilibrada en Carbohidratos la bebida contiene Minerales importantes,
                    Vitaminas, Aminoácidos ramificados (BCAAs) y L-Carnitina.',
                    'precio' => '49.95', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '21.jpg', 'categoria_id' => 5],
                ['nombre' => 'NUTRISPORT GEL TAURINA 40g', 'descripcion' => 'Gel Nutrisport Taurina 40g
                    -Energía: Hidratos de carbono cadena corta (4.6 g):
                    Nutrisport Gel te proporciona la cantidad adecuada de hidratos de carbono de cadena corta (Fructosa + Dextrosa) para asegurar un aporte energético inmediato sin ocasionar indeseados picos de azúcar en sangre (y por tanto de insulina), responsables del temido "bajón".
                    Hidratos de carbono cadena larga (26 g):
                    Nutrisport Gel completa su fórmula energética con hidratos de carbono de cadena larga que, gracias a su mecanismo de absorción sostenida, aseguran un aporte energético prolongado evitando la fatiga muscular..
                    -Absorción de nutrientes y rendimiento:
                    Taurina (50mg):
                    Aminoácido muy abundante en el tejido muscular que desarrolla un importante papel en el rendimiento del deportista. Estimula la absorción de nutrientes y mejora el rendimiento gracias a su intervención en el sistema neurotransmisor. Mejora la respuesta muscular y, por tanto, el rendimiento.
                    Vitaminas del grupo B (15% CDR*):
                    Conjunto de vitaminas hidrosolubles (B1, B2, B3 y B6) esenciales en los procesos de obtención de energía dentro del organismo. La practica de ejercicio implica un incremento de su actividad y, por tanto, un aumento de las necesidades de este grupo de vitaminas tan esenciales en el rendimiento del deportista.',
                    'precio' => '1.80', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '22.jpg', 'categoria_id' => 5],
                ['nombre' => 'WINFORCE ISOTONE CONCENTRADO', 'descripcion' => 'Bebida Concetrada isotónica Winforce
                    Aporta a tu cuerpo carbohidratos de azúcares simples y electrolitos (sodio, calcio, magnesio y potasio). Bebida deportiva a base de jugo de frutas, sin aditivos, conservantes ni colorantes, muy afrutada y de muy fácil digestión.
                    Fácil digestión.
                    100% natural. Sin aditivos artificiales.
                    Con 33g del preparado obtendrás 500ml de bebida isotónica. Botella de 1 litro (que da para 40 bidones de 500ml).',
                    'precio' => '39.90', 'precio_oferta' => '30', 'rebajas' => 1, 'imagen' => '23.jpg', 'categoria_id' => 5],
                ['nombre' => 'NUTRIXXION BARRITA PROTEÍCA', 'descripcion' => 'Barrita Protéica Nutrixxion65grs.Entreno, CompeticiónLa nueva barrita proteica con un 30% de proteínas de alta calidad. Ideal para antes y después del entrenamiento.',
                    'precio' => '2.40', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '24.jpg', 'categoria_id' => 5],
                ['nombre' => 'ZIPVIT ZV0 ELECTROLITO TABLETAS', 'descripcion' => 'ZV0 Electrolito Tabletas
                    Una bebida deportiva específicamente creada para alcanzar las exigencias de los deportes de alta resistencia. Deportes que requieren electrolitos para la hidratación, mantener los músculos trabajando en optimas condiciones y ayudar a quemar grasas*.
                    El resultado es ZVO, una bebida que optimiza la quema de grasas*, repone el cuerpo 1.6g de glutamina para el sistema inmune y repone 7 electrolitos.
                    Cada caja contiene 20 tabletas efervescentes que equivalen a 15 litros de bebida.
                    Sin Lácteos • Sin Gluten • Sin Sabores Artificiales • Sin Colorantes Artificiales
                    *Relativo a las bebidas deportivas convencionales',
                    'precio' => '13.99', 'precio_oferta' => '', 'rebajas' => 0, 'imagen' => '25.jpg', 'categoria_id' => 5],
            ));
    }
    
}
