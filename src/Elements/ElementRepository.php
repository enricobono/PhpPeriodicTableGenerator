<?php

namespace PeriodicTable\Elements;

class ElementRepository
{

    /** @var Element[] */
    private $elements = [];

    public function __construct()
    {
        $this->addElement(new Element(1, 'H', 'Hydrogen', '1.0080', '20.28', '0.00008988', '2.20'));
        $this->addElement(new Element(2, 'He', 'Helium', '4.0026', '4.22', '0.00017', '-'));
        $this->addElement(new Element(3, 'Li', 'Lithium', '6.9400', '1560', '534', '0.98'));
        $this->addElement(new Element(4, 'Be', 'Beryllium', '9.0121', '2742', '1.85', '1.57'));
        $this->addElement(new Element(5, 'B', 'Boron', '10.8100', '4200', '2.34', '2.04'));
        $this->addElement(new Element(6, 'C', 'Carbon', '12.0110', '4300', '2267', '2.55'));
        $this->addElement(new Element(7, 'N', 'Nitrogen', '14.0070', '77.36', '0.0012506', '3.04'));
        $this->addElement(new Element(8, 'O', 'Oxygen', '15.9990', '90.20', '0.001429', '3.44'));
        $this->addElement(new Element(9, 'F', 'Fluorine', '18.9984', '85.03', '0.001696', '3.98'));
        $this->addElement(new Element(10, 'Ne', 'Neon', '20.1797', '27.07', '0.0008999', '-'));
        $this->addElement(new Element(11, 'Na', 'Sodium', '22.9897', '1156', '971', '0.93'));
        $this->addElement(new Element(12, 'Mg', 'Magnesium', '24.3050', '1363', '1738', '1.31'));
        $this->addElement(new Element(13, 'Al', 'Aluminium', '26.9815', '2792', '2698', '1.61'));
        $this->addElement(new Element(14, 'Si', 'Silicon', '28.0850', '3538', '2.3296', '1.9'));
        $this->addElement(new Element(15, 'P', 'Phosphorus', '30.9737', '550', '1.82', '2.19'));
        $this->addElement(new Element(16, 'S', 'Sulfur', '32.0600', '717.87', '2067', '2.58'));
        $this->addElement(new Element(17, 'Cl', 'Chlorine', '35.4500', '239.11', '0.00321', '3.16'));
        $this->addElement(new Element(18, 'Ar', 'Argon', '39.9480', '87.30', '0.0017', '-'));
        $this->addElement(new Element(19, 'K', 'Potassium', '39.0983', '1032', '862', '0.82'));
        $this->addElement(new Element(20, 'Ca', 'Calcium', '40.0780', '1757', '1.54', '1'));
        $this->addElement(new Element(21, 'Sc', 'Scandium', '44.9559', '3109', '2989', '1.36'));
        $this->addElement(new Element(22, 'Ti', 'Titanium', '47.8670', '3560', '4.54', '1.54'));
        $this->addElement(new Element(23, 'V', 'Vanadium', '50.9415', '3680', '6.11', '1.63'));
        $this->addElement(new Element(24, 'Cr', 'Chromium', '51.9961', '2944', '7.15', '1.66'));
        $this->addElement(new Element(25, 'Mn', 'Manganese', '54.9380', '2334', '7.44', '1.55'));
        $this->addElement(new Element(26, 'Fe', 'Iron', '55.8450', '3134', '7874', '1.83'));
        $this->addElement(new Element(27, 'Co', 'Cobalt', '58.9331', '3200', '8.86', '1.88'));
        $this->addElement(new Element(28, 'Ni', 'Nickel', '58.6934', '3186', '8912', '1.91'));
        $this->addElement(new Element(29, 'Cu', 'Copper', '63.5460', '2835', '8.96', '1.9'));
        $this->addElement(new Element(30, 'Zn', 'Zinc', '65.3800', '1180', '7134', '1.65'));
        $this->addElement(new Element(31, 'Ga', 'Gallium', '69.7230', '2673', '5907', '1.81'));
        $this->addElement(new Element(32, 'Ge', 'Germanium', '72.6300', '3106', '5323', '2.01'));
        $this->addElement(new Element(33, 'As', 'Arsenic', '74.9215', '887', '5776', '2.18'));
        $this->addElement(new Element(34, 'Se', 'Selenium', '78.9710', '958', '4809', '2.55'));
        $this->addElement(new Element(35, 'Br', 'Bromine', '79.9040', '332.0', '3122', '2.96'));
        $this->addElement(new Element(36, 'Kr', 'Krypton', '83.7980', '119.93', '0.0037', '3'));
        $this->addElement(new Element(37, 'Rb', 'Rubidium', '85.4678', '961', '1532', '0.82'));
        $this->addElement(new Element(38, 'Sr', 'Strontium', '87.6200', '1655', '2.64', '0.95'));
        $this->addElement(new Element(39, 'Y', 'Yttrium', '88.9058', '3609', '4469', '1.22'));
        $this->addElement(new Element(40, 'Zr', 'Zirconium', '91.2240', '4682', '6506', '1.33'));
        $this->addElement(new Element(41, 'Nb', 'Niobium', '92.9063', '5017', '8.57', '1.6'));
        $this->addElement(new Element(42, 'Mo', 'Molybdenum', '95.9500', '4912', '10.22', '2.16'));
        $this->addElement(new Element(43, 'Tc', 'Technetium', '-98', '4538', '11.5', '1.9'));
        $this->addElement(new Element(44, 'Ru', 'Ruthenium', '101.0700', '4423', '12.37', '2.2'));
        $this->addElement(new Element(45, 'Rh', 'Rhodium', '102.9054', '3968', '12.41', '2.28'));
        $this->addElement(new Element(46, 'Pd', 'Palladium', '106.4200', '3236', '12.02', '2.2'));
        $this->addElement(new Element(47, 'Ag', 'Silver', '107.8682', '2435', '10501', '1.93'));
        $this->addElement(new Element(48, 'Cd', 'Cadmium', '112.4140', '1040', '8.69', '1.69'));
        $this->addElement(new Element(49, 'In', 'Indium', '114.8180', '2345', '7.31', '1.78'));
        $this->addElement(new Element(50, 'Sn', 'Tin', '118.7100', '2875', '7287', '1.96'));
        $this->addElement(new Element(51, 'Sb', 'Antimony', '121.7600', '1860', '6685', '2.05'));
        $this->addElement(new Element(52, 'Te', 'Tellurium', '127.6000', '1261', '6232', '2.1'));
        $this->addElement(new Element(53, 'I', 'Iodine', '126.9044', '457.4', '4.93', '2.66'));
        $this->addElement(new Element(54, 'Xe', 'Xenon', '131.2930', '165.03', '0.0058', '2.6'));
        $this->addElement(new Element(55, 'Cs', 'Caesium', '132.9054', '944', '1873', '0.79'));
        $this->addElement(new Element(56, 'Ba', 'Barium', '137.3270', '2170', '3594', '0.89'));
        $this->addElement(new Element(57, 'La', 'Lanthanum', '138.9054', '3737', '6145', '1.1'));
        $this->addElement(new Element(58, 'Ce', 'Cerium', '140.1160', '3716', '6.77', '1.12'));
        $this->addElement(new Element(59, 'Pr', 'Praseodymium', '140.9076', '3793', '6773', '1.13'));
        $this->addElement(new Element(60, 'Nd', 'Neodymium', '144.2420', '3347', '7007', '1.14'));
        $this->addElement(new Element(61, 'Pm', 'Promethium', '-145', '3273', '7.26', '1.13'));
        $this->addElement(new Element(62, 'Sm', 'Samarium', '150.3600', '2067', '7.52', '1.17'));
        $this->addElement(new Element(63, 'Eu', 'Europium', '151.9640', '1802', '5243', '1.2'));
        $this->addElement(new Element(64, 'Gd', 'Gadolinium', '157.2500', '3546', '7895', '1.2'));
        $this->addElement(new Element(65, 'Tb', 'Terbium', '158.9253', '3503', '8229', '1.2'));
        $this->addElement(new Element(66, 'Dy', 'Dysprosium', '162.5000', '2840', '8.55', '1.22'));
        $this->addElement(new Element(67, 'Ho', 'Holmium', '164.9303', '2993', '8795', '1.23'));
        $this->addElement(new Element(68, 'Er', 'Erbium', '167.2590', '3141', '9066', '1.24'));
        $this->addElement(new Element(69, 'Tm', 'Thulium', '168.9342', '2223', '9321', '1.25'));
        $this->addElement(new Element(70, 'Yb', 'Ytterbium', '173.0450', '1469', '6965', '1.1'));
        $this->addElement(new Element(71, 'Lu', 'Lutetium', '174.9668', '3675', '9.84', '1.27'));
        $this->addElement(new Element(72, 'Hf', 'Hafnium', '178.4900', '4876', '13.31', '1.3'));
        $this->addElement(new Element(73, 'Ta', 'Tantalum', '180.9478', '5731', '16654', '1.5'));
        $this->addElement(new Element(74, 'W', 'Tungsten', '183.8400', '5828', '19.25', '2.36'));
        $this->addElement(new Element(75, 'Re', 'Rhenium', '186.2070', '5869', '21.02', '1.9'));
        $this->addElement(new Element(76, 'Os', 'Osmium', '190.2300', '5285', '22.61', '2.2'));
        $this->addElement(new Element(77, 'Ir', 'Iridium', '192.2170', '4701', '22.56', '2.2'));
        $this->addElement(new Element(78, 'Pt', 'Platinum', '195.0840', '4098', '21.46', '2.28'));
        $this->addElement(new Element(79, 'Au', 'Gold', '196.9665', '3129', '19282', '2.54'));
        $this->addElement(new Element(80, 'Hg', 'Mercury', '200.5920', '629.88', '13.533', '2'));
        $this->addElement(new Element(81, 'Tl', 'Thallium', '204.3800', '1746', '11.85', '1.62'));
        $this->addElement(new Element(82, 'Pb', 'Lead', '207.2000', '2022', '11342', '1.87'));
        $this->addElement(new Element(83, 'Bi', 'Bismuth', '208.9804', '1837', '9807', '2.02'));
        $this->addElement(new Element(84, 'Po', 'Polonium', '(209)', '1235', '9.32', '2.0'));
        $this->addElement(new Element(85, 'At', 'Astatine', '(210)', '500', '7', '2.2'));
        $this->addElement(new Element(86, 'Rn', 'Radon', '(222)', '211.3', '0.0097', '2.2'));
        $this->addElement(new Element(87, 'Fr', 'Francium', '(223)', '890', '1.87', '0.7'));
        $this->addElement(new Element(88, 'Ra', 'Radium', '(226)', '2010', '5.5', '0.9'));
        $this->addElement(new Element(89, 'Ac', 'Actinium', '(227)', '3471', '10.07', '1.1'));
        $this->addElement(new Element(90, 'Th', 'Thorium', '232.0377', '5061', '11.72', '1.3'));
        $this->addElement(new Element(91, 'Pa', 'Protactinium', '231.0358', '4300', '15.37', '1.5'));
        $this->addElement(new Element(92, 'U', 'Uranium', '238.0289', '4404', '18.95', '1.38'));
        $this->addElement(new Element(93, 'Np', 'Neptunium', '(237)', '4273', '20.45', '1.36'));
        $this->addElement(new Element(94, 'Pu', 'Plutonium', '(244)', '3501', '19.84', '1.28'));
        $this->addElement(new Element(95, 'Am', 'Americium', '(243)', '2880', '13.69', '1.13'));
        $this->addElement(new Element(96, 'Cm', 'Curium', '(247)', '3383', '13.51', '1.28'));
        $this->addElement(new Element(97, 'Bk', 'Berkelium', '(247)', '2900', '14.79', '1.3'));
        $this->addElement(new Element(98, 'Cf', 'Californium', '(251)', '-1743', '15.1', '1.3'));
        $this->addElement(new Element(99, 'Es', 'Einsteinium', '(252)', '-1269', '8.84', '1.3'));
        $this->addElement(new Element(100, 'Fm', 'Fermium', '(257)', '-', '(9.7)', '1.3'));
        $this->addElement(new Element(101, 'Md', 'Mendelevium', '(258)', '-', '(10.3)', '1.3'));
        $this->addElement(new Element(102, 'No', 'Nobelium', '(259)', '-', '(9.9)', '1.3'));
        $this->addElement(new Element(103, 'Lr', 'Lawrencium', '(266)', '-', '(15.6)', '1.3'));
        $this->addElement(new Element(104, 'Rf', 'Rutherfordium', '(267)', '-5800', '(23.2)', '-'));
        $this->addElement(new Element(105, 'Db', 'Dubnium', '(268)', '-', '(29.3)', '-'));
        $this->addElement(new Element(106, 'Sg', 'Seaborgium', '(269)', '-', '(35.0)', '-'));
        $this->addElement(new Element(107, 'Bh', 'Bohrium', '(270)', '-', '(37.1)', '-'));
        $this->addElement(new Element(108, 'Hs', 'Hassium', '(270)', '-', '(40.7)', '-'));
        $this->addElement(new Element(109, 'Mt', 'Meitnerium', '(278)', '-', '(37.4)', '-'));
        $this->addElement(new Element(110, 'Ds', 'Darmstadtium', '(281)', '-', '(34.8)', '-'));
        $this->addElement(new Element(111, 'Rg', 'Roentgenium', '(282)', '-', '(28.7)', '-'));
        $this->addElement(new Element(112, 'Cn', 'Copernicium', '(285)', '(340)', '(14.0)', '-'));
        $this->addElement(new Element(113, 'Nh', 'Nihonium', '(286)', '(1400)', '(16)', '-'));
        $this->addElement(new Element(114, 'Fl', 'Flerovium', '(289)', '~210', '(14)', '-'));
        $this->addElement(new Element(115, 'Mc', 'Moscovium', '(290)', '(1400)', '(13.5)', '-'));
        $this->addElement(new Element(116, 'Lv', 'Livermorium', '(293)', '(1100)', '(12.9)', '-'));
        $this->addElement(new Element(117, 'Ts', 'Tennessine', '(294)', '(883)', '(7.2)', '-'));
        $this->addElement(new Element(118, 'Og', 'Oganesson', '(294)', '(~350)', '(5.0)', '-'));
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
