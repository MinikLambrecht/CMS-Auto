<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/src/includes/createCarousel.php';

    $vaerkstedsvogn = array(
        "/src/images/Vaerkstedsvogn/vaerk1.webp",
        "/src/images/Vaerkstedsvogn/vaerk2.webp",
        "/src/images/Vaerkstedsvogn/vaerk3.webp",
        "/src/images/Vaerkstedsvogn/vaerk4.webp",
        "/src/images/Vaerkstedsvogn/vaerk5.webp",
        "/src/images/Vaerkstedsvogn/vaerk6.webp",
        "/src/images/Vaerkstedsvogn/vaerk7.webp",
        "/src/images/Vaerkstedsvogn/vaerk8.webp",
    );

    $studenterkasse = array(
        "/src/images/Studenterkasse/kasse1.webp",
        "/src/images/Studenterkasse/kasse2.webp",
        "/src/images/Studenterkasse/kasse3.webp",
        "/src/images/Studenterkasse/kasse4.webp",
        "/src/images/Studenterkasse/kasse5.webp",
        "/src/images/Studenterkasse/kasse6.webp",
        "/src/images/Studenterkasse/kasse7.webp"
    );

    $volvofh12 = array(
        "/src/images/Volvo-fh12/volvo1.webp",
        "/src/images/Volvo-fh12/volvo2.webp",
        "/src/images/Volvo-fh12/volvo3.webp",
        "/src/images/Volvo-fh12/volvo4.webp",
        "/src/images/Volvo-fh12/volvo5.webp",
        "/src/images/Volvo-fh12/volvo6.webp"
    );

    $monteringafdiv = array(
        "/src/images/Montering-af-div/car1.webp",
        "/src/images/Montering-af-div/car2.webp",
        "/src/images/Montering-af-div/car3.webp",
        "/src/images/Montering-af-div/car4.webp",
        "/src/images/Montering-af-div/toyota1.webp",
        "/src/images/Montering-af-div/toyota2.webp",
        "/src/images/Montering-af-div/toyota3.webp",
        "/src/images/Montering-af-div/toyota4.webp",
        "/src/images/Montering-af-div/toyota5.webp",
        "/src/images/Montering-af-div/toyota6.webp",
        "/src/images/Montering-af-div/toyota7.webp",
        "/src/images/Montering-af-div/toyota8.webp",
        "/src/images/Montering-af-div/toyota9.webp",
        "/src/images/Montering-af-div/toyota10.webp",
        "/src/images/Montering-af-div/toyota11.webp",
        "/src/images/Montering-af-div/toyota12.webp"
    );

    $scania143 = array(
        "/src/images/Scania-143/scania1.webp",
        "/src/images/Scania-143/scania2.webp",
        "/src/images/Scania-143/scania3.webp",
        "/src/images/Scania-143/scania4.webp",
        "/src/images/Scania-143/scania5.webp",
        "/src/images/Scania-143/scania6.webp",
        "/src/images/Scania-143/scania7.webp",
        "/src/images/Scania-143/scania8.webp",
        "/src/images/Scania-143/scania9.webp",
        "/src/images/Scania-143/scania10.webp"
    );

    $assenssukkerfabrik = array(
        "/src/images/Assens-sukkerfabrik/ned1.webp",
        "/src/images/Assens-sukkerfabrik/ned2.webp",
        "/src/images/Assens-sukkerfabrik/ned3.webp",
        "/src/images/Assens-sukkerfabrik/ned4.webp",
        "/src/images/Assens-sukkerfabrik/ned5.webp",
        "/src/images/Assens-sukkerfabrik/ned6.webp",
        "/src/images/Assens-sukkerfabrik/ned7.webp",
        "/src/images/Assens-sukkerfabrik/ned8.webp"
    );

    $flytningafknuser = array (
        "/src/images/Flytning-af-knuser/fl1.webp",
        "/src/images/Flytning-af-knuser/fl2.webp",
        "/src/images/Flytning-af-knuser/fl3.webp",
        "/src/images/Flytning-af-knuser/fl4.webp",
        "/src/images/Flytning-af-knuser/fl5.webp"
    );

    $akselfradumper = array(
        "/src/images/Aksel-fra-dumper/aksel1.webp",
        "/src/images/Aksel-fra-dumper/aksel2.webp",
        "/src/images/Aksel-fra-dumper/aksel3.webp",
    );
?>

<div class='container mb-3'>
    <h1 class='text-dark text-center mb-4'>
        Projekter
    </h1>

    <?php echo createCarouselWithDesc('vaerkstedsvogn', $vaerkstedsvogn, 10000, 'Opbygning af egen værkstedsvogn: Rullende værksted. Bruges på ude opgaver : Entreprenørmaskiner lastvogne m.m.') ?>
    <?php echo createCarouselWithDesc('studenterkasse', $studenterkasse, 10000, 'Fremstilling af overdækning af studenterkasse.') ?>
    <?php echo createCarouselWithDesc('volvofh12', $volvofh12, 10000, 'Montering af lys på  Volvo FH12.') ?>
    <?php echo createCarouselWithDesc('monteringafdiv', $monteringafdiv, 10000, 'Montering af  blitzlamper, rotorbro, arbejdslygter, kontakter, beslag for  skilte. Værkstedsreol, og omformer for 220v., walkie og antenne.') ?>
    <?php echo createCarouselWithDesc('scania143', $scania143, 10000, 'Restaurering af Scania 143.') ?>
    <?php echo createCarouselWithDesc('assenssukkerfabrik', $assenssukkerfabrik, 10000, 'Anderledes opgave nedtagning af transportbånd på Assens sukkerfabrik. Billeder af stikarm gravemaskine.') ?>
    <?php echo createCarouselWithDesc('flytningafknuser', $flytningafknuser, 10000, 'Flytning af knuser med følgebil.') ?>
    <?php echo createCarouselWithDesc('akselfradumper', $akselfradumper, 10000, 'Aksel fra dumper. Navreduktionsplittet af. Komplet afmonteret på stedet og taget med hjem for reperation.') ?>
</div>
