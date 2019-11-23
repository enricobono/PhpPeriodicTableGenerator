<?php

namespace PeriodicTable\Elements;

class ElementRepository
{

    /** @var Element[] */
    private $elements = [];

    public function __construct()
    {
        $this->addElement(new Element(1, 'H', 'Idrogeno','1.0080', '20.28', '0.001', '2.20'));
        $this->addElement(new Element(2, 'He', 'Elio','4.0026', '4.22', '0.001', '–'));
//        $this->addElement(new Element(3, 'Li', 'Litio','6.9400', '1560', '534', '0.98'));
//        $this->addElement(new Element(4, 'Be', 'Berillio','9.0121', '2742', '1.85', '1.57'));
        $this->addElement(new Element(5, 'B', 'Boro','10.8100', '4200', '2.34', '2.04'));
        $this->addElement(new Element(6, 'C', 'Carbonio','12.0110', '4300', '2267', '2.55'));
        $this->addElement(new Element(7, 'N', 'Azoto','14.0070', '77.36', '0.001', '3.04'));
        $this->addElement(new Element(8, 'O', 'Ossigeno','15.9990', '90.20', '0.001', '3.44'));
        $this->addElement(new Element(9, 'F', 'Fluoro','18.9984', '85.03', '0.002', '3.98'));
        $this->addElement(new Element(10, 'Ne', 'Neon','20.1797', '27.07', '0.001', '–'));
        $this->addElement(new Element(11, 'Na', 'Sodio','22.9897', '1156', '971', '0.93'));
//        $this->addElement(new Element(12, 'Mg', 'Magnesio','24.3050', '1363', '1738', '1.31'));
        $this->addElement(new Element(13, 'Al', 'Alluminio','26.9815', '2792', '2698', '1.61'));
//        $this->addElement(new Element(14, 'Si', 'Silicio','28.0850', '3538', '2.3296', '1.9'));
//        $this->addElement(new Element(15, 'P', 'Fosforo','30.9737', '550', '1.82', '2.19'));
//        $this->addElement(new Element(16, 'S', 'Zolfo','32.0600', '717.8', '2067', '2.58'));
//        $this->addElement(new Element(17, 'Cl', 'Cloro','35.4500', '239.1', '0.0032', '3.16'));
//        $this->addElement(new Element(18, 'Ar', 'Argon','39.9480', '87.30', '0.0017', '–'));
//        $this->addElement(new Element(19, 'K', 'Potassio','39.0983', '1032', '862', '0.82'));
//        $this->addElement(new Element(20, 'Ca', 'Calcio','40.0780', '1757', '1.54', '1'));
//        $this->addElement(new Element(21, 'Sc', 'Scandio','44.9559', '3109', '2989', '1.36'));
//        $this->addElement(new Element(22, 'Ti', 'Titanio','47.8670', '3560', '4.54', '1.54'));
//        $this->addElement(new Element(23, 'V', 'Vanadio','50.9415', '3680', '6.11', '1.63'));
//        $this->addElement(new Element(24, 'Cr', 'Cromo','51.9961', '2944', '7.15', '1.66'));
//        $this->addElement(new Element(25, 'Mn', 'Manganese','54.9380', '2334', '7.44', '1.55'));
//        $this->addElement(new Element(26, 'Fe', 'Ferro','55.8450', '3134', '7874', '1.83'));
//        $this->addElement(new Element(27, 'Co', 'Cobalto','58.9331', '3200', '8.86', '1.88'));
//        $this->addElement(new Element(28, 'Ni', 'Nichel','58.6934', '3186', '8912', '1.91'));
//        $this->addElement(new Element(29, 'Cu', 'Rame','63.5460', '2835', '8.96', '1.9'));
        $this->addElement(new Element(30, 'Zn', 'Zinco','65.3800', '1180', '7134', '1.65'));
//        $this->addElement(new Element(31, 'Ga', 'Gallio','69.7230', '2673', '5907', '1.81'));
//        $this->addElement(new Element(32, 'Ge', 'Germanio','72.6300', '3106', '5323', '2.01'));
//        $this->addElement(new Element(33, 'As', 'Arsenico','74.9215', '887', '5776', '2.18'));
//        $this->addElement(new Element(34, 'Se', 'Selenio','78.9710', '958', '4809', '2.55'));
//        $this->addElement(new Element(35, 'Br', 'Bromo','79.9040', '332.0', '3122', '2.96'));
//        $this->addElement(new Element(36, 'Kr', 'Kripton','83.7980', '119.9', '0.0037', '3'));
//        $this->addElement(new Element(37, 'Rb', 'Rubidio','85.4678', '961', '1532', '0.82'));
//        $this->addElement(new Element(38, 'Sr', 'Stronzio','87.6200', '1655', '2.64', '0.95'));
//        $this->addElement(new Element(39, 'Y', 'Ittrio','88.9058', '3609', '4469', '1.22'));
//        $this->addElement(new Element(40, 'Zr', 'Zirconio','91.2240', '4682', '6506', '1.33'));
//        $this->addElement(new Element(41, 'Nb', 'Niobio','92.9063', '5017', '8.57', '1.6'));
        $this->addElement(new Element(42, 'Mo', 'Molibdeno','95.9500', '4912', '10.22', '2.16'));
//        $this->addElement(new Element(43, 'Tc', 'Tecnezio','-98', '4538', '11.5', '1.9'));
//        $this->addElement(new Element(44, 'Ru', 'Rutenio','101.0700', '4423', '12.37', '2.2'));
//        $this->addElement(new Element(45, 'Rh', 'Rodio','102.9054', '3968', '12.41', '2.28'));
//        $this->addElement(new Element(46, 'Pd', 'Palladio','106.4200', '3236', '12.02', '2.2'));
//        $this->addElement(new Element(47, 'Ag', 'Argento','107.8682', '2435', '10501', '1.93'));
//        $this->addElement(new Element(48, 'Cd', 'Cadmio','112.4140', '1040', '8.69', '1.69'));
//        $this->addElement(new Element(49, 'In', 'Indio','114.8180', '2345', '7.31', '1.78'));
//        $this->addElement(new Element(50, 'Sn', 'Stagno','118.7100', '2875', '7287', '1.96'));
        $this->addElement(new Element(51, 'Sb', 'Antimonio','121.7600', '1860', '6685', '2.05'));
//        $this->addElement(new Element(52, 'Te', 'Tellurio','127.6000', '1261', '6232', '2.1'));
//        $this->addElement(new Element(53, 'I', 'Iodio','126.9044', '457.4', '4.93', '2.66'));
//        $this->addElement(new Element(54, 'Xe', 'Xenon','131.2930', '165', '0.0058', '2.6'));
//        $this->addElement(new Element(55, 'Cs', 'Cesio','132.9054', '944', '1873', '0.79'));
//        $this->addElement(new Element(56, 'Ba', 'Bario','137.3270', '2170', '3594', '0.89'));
//        $this->addElement(new Element(57, 'La', 'Lantanio','138.9054', '3737', '6145', '1.1'));
//        $this->addElement(new Element(58, 'Ce', 'Cerio','140.1160', '3716', '6.77', '1.12'));
                $this->addElement(new Element(59, 'Pr', 'Praseodimio','140.9076', '3793', '6773', '1.13'));
//        $this->addElement(new Element(60, 'Nd', 'Neodimio','144.2420', '3347', '7007', '1.14'));
//        $this->addElement(new Element(61, 'Pm', 'Promezio','-145', '3273', '7.26', '1.13'));
//        $this->addElement(new Element(62, 'Sm', 'Samario','150.3600', '2067', '7.52', '1.17'));
//        $this->addElement(new Element(63, 'Eu', 'Europio','151.9640', '1802', '5243', '1.2'));
//        $this->addElement(new Element(64, 'Gd', 'Gadolinio','157.2500', '3546', '7895', '1.2'));
//        $this->addElement(new Element(65, 'Tb', 'Terbio','158.9253', '3503', '8229', '1.2'));
//        $this->addElement(new Element(66, 'Dy', 'Disprosio','162.5000', '2840', '8.55', '1.22'));
//        $this->addElement(new Element(67, 'Ho', 'Olmio','164.9303', '2993', '8795', '1.23'));
//        $this->addElement(new Element(68, 'Er', 'Erbio','167.2590', '3141', '9066', '1.24'));
//        $this->addElement(new Element(69, 'Tm', 'Tulio','168.9342', '2223', '9321', '1.25'));
//        $this->addElement(new Element(70, 'Yb', 'Itterbio','173.0450', '1469', '6965', '1.1'));
//        $this->addElement(new Element(71, 'Lu', 'Lutezio','174.9668', '3675', '9.84', '1.27'));
//        $this->addElement(new Element(72, 'Hf', 'Afnio','178.4900', '4876', '13.31', '1.3'));
//        $this->addElement(new Element(73, 'Ta', 'Tantalio','180.9478', '5731', '16654', '1.5'));
        $this->addElement(new Element(74, 'W', 'Tungsteno','183.8400', '5828', '19.25', '2.36'));
//        $this->addElement(new Element(75, 'Re', 'Renio','186.2070', '5869', '21.02', '1.9'));
//        $this->addElement(new Element(76, 'Os', 'Osmio','190.2300', '5285', '22.61', '2.2'));
//        $this->addElement(new Element(77, 'Ir', 'Iridio','192.2170', '4701', '22.56', '2.2'));
//        $this->addElement(new Element(78, 'Pt', 'Platino','195.0840', '4098', '21.46', '2.28'));
//        $this->addElement(new Element(79, 'Au', 'Oro','196.9665', '3129', '19282', '2.54'));
//        $this->addElement(new Element(80, 'Hg', 'Mercurio','200.5920', '629.9', '13.5336', '2'));
//        $this->addElement(new Element(81, 'Tl', 'Tallio','204.3800', '1746', '11.85', '1.62'));
//        $this->addElement(new Element(82, 'Pb', 'Piombo','207.2000', '2022', '11342', '1.87'));
//        $this->addElement(new Element(83, 'Bi', 'Bismuto','208.9804', '1837', '9807', '2.02'));
//        $this->addElement(new Element(84, 'Po', 'Polonio','(209)', '1235', '9.32', '2.0'));
        $this->addElement(new Element(85, 'At', 'Astato','(210)', '500', '7', '2.2'));
//        $this->addElement(new Element(86, 'Rn', 'Radon','(222)', '211.3', '0.00973', '2.2'));
//        $this->addElement(new Element(87, 'Fr', 'Francio','(223)', '890', '1.87', '0.7'));
//        $this->addElement(new Element(88, 'Ra', 'Radio','(226)', '2010', '5.5', '0.9'));
//        $this->addElement(new Element(89, 'Ac', 'Attinio','(227)', '3471', '10.07', '1.1'));
//        $this->addElement(new Element(90, 'Th', 'Torio','232.0377', '5061', '11.72', '1.3'));
                $this->addElement(new Element(91, 'Pa', 'Protoattinio','231.0358', '4300', '15.3', '1.5'));
        $this->addElement(new Element(92, 'U', 'Uranio','238.0289', '4404', '18.95', '1.38'));
//        $this->addElement(new Element(93, 'Np', 'Nettunio','(237)', '4273', '20.45', '1.36'));
//        $this->addElement(new Element(94, 'Pu', 'Plutonio','(244)', '3501', '19.84', '1.28'));
//        $this->addElement(new Element(95, 'Am', 'Americio','(243)', '2880', '13.69', '1.13'));
//        $this->addElement(new Element(96, 'Cm', 'Curio','(247)', '3383', '13.51', '1.28'));
//        $this->addElement(new Element(97, 'Bk', 'Berkelio','(247)', '2900', '14.79', '1.3'));
//        $this->addElement(new Element(98, 'Cf', 'Californio','(251)', '-1743', '15.1', '1.3'));
//        $this->addElement(new Element(99, 'Es', 'Einsteinio','(252)', '-1269', '8.84', '1.3'));
//        $this->addElement(new Element(100, 'Fm', 'Fermio','(257)', '–', '(9.7)', '1.3'));
        $this->addElement(new Element(101, 'Md', 'Mendelevio','(258)', '–', '(10)', '1.3'));
//        $this->addElement(new Element(102, 'No', 'Nobelio','(259)', '–', '(9.9)', '1.3'));
//        $this->addElement(new Element(103, 'Lr', 'Laurenzio','(266)', '–', '(15.6)', '1.3'));
                $this->addElement(new Element(104, 'Rf', 'Rutherfordio','(267)', '-5800', '(23)', '–'));
//        $this->addElement(new Element(105, 'Db', 'Dubnio','(268)', '–', '(29.3)', '–'));
//        $this->addElement(new Element(106, 'Sg', 'Seaborgio','(269)', '–', '(35.0)', '–'));
//        $this->addElement(new Element(107, 'Bh', 'Bohrio','(270)', '–', '(37.1)', '–'));
//        $this->addElement(new Element(108, 'Hs', 'Hassio','(270)', '–', '(40.7)', '–'));
//        $this->addElement(new Element(109, 'Mt', 'Meitnerio','(278)', '–', '(37.4)', '–'));
//        $this->addElement(new Element(110, 'Ds', 'Darmstadtio','(281)', '–', '(34.8)', '–'));
//        $this->addElement(new Element(111, 'Rg', 'Roentgenio','(282)', '–', '(28.7)', '–'));
//        $this->addElement(new Element(112, 'Cn', 'Copernicio','(285)', '(340)', '(14.0)', '–'));
//        $this->addElement(new Element(113, 'Nh', 'Nihonio','(286)', '(1400)', '(16)', '–'));
//        $this->addElement(new Element(114, 'Fl', 'Flerovio','(289)', '~210', '(14)', '–'));
//        $this->addElement(new Element(115, 'Mc', 'Moscovio','(290)', '(1400)', '(13.5)', '–'));
//        $this->addElement(new Element(116, 'Lv', 'Livermorio','(293)', '(1100)', '(12.9)', '–'));
//        $this->addElement(new Element(117, 'Ts', 'Tennesso','(294)', '(883)', '(7.2)', '–'));
//        $this->addElement(new Element(118, 'Og', 'Oganesson','(294)', '(~350)', '(5.0)', '–'));
        $this->addElement(new Element(119, 'E', 'Enrichizio','238', '1.001', '49.01', '4.12'));

    }

    /**
     * @return Element[]
     */
    public function getElements(): array
    {
        return $this->elements;
    }

    /**
     * @param Element $element
     */
    private function addElement(Element $element)
    {
        $this->elements[] = $element;
    }
}
