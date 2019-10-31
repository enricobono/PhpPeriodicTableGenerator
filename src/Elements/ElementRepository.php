<?php

namespace PeriodicTable\Elements;

class ElementRepository
{

    /** @var Element[] */
    private $elements = [];

    public function __construct()
    {
        $this->addElement(new Element('H', 'Hydrogen', 1, '1.0080', '20.28', '0.00008988', '2.20'));
        $this->addElement(new Element('He', 'Helium', 2, '4.0026', '4.22', '0.0001785', '–'));
        $this->addElement(new Element('Li', 'Lithium', 3, '6.9400', '1560', '534', '0.98'));
        $this->addElement(new Element('Be', 'Beryllium', 4, '9.0121', '2742', '1.85', '1.57'));
        $this->addElement(new Element('B', 'Boron', 5, '10.8100', '4200', '2.34', '2.04'));
        $this->addElement(new Element('C', 'Carbon', 6, '12.0110', '4300', '2267', '2.55'));
        $this->addElement(new Element('N', 'Nitrogen', 7, '14.0070', '77.36', '0.0012506', '3.04'));
        $this->addElement(new Element('O', 'Oxygen', 8, '15.9990', '90.20', '0.001429', '3.44'));
        $this->addElement(new Element('F', 'Fluorine', 9, '18.9984', '85.03', '0.001696', '3.98'));
        $this->addElement(new Element('Ne', 'Neon', 10, '20.1797', '27.07', '0.0008999', '–'));
        $this->addElement(new Element('Na', 'Sodium', 11, '22.9897', '1156', '971', '0.93'));
        $this->addElement(new Element('Mg', 'Magnesium', 12, '24.3050', '1363', '1738', '1.31'));
        $this->addElement(new Element('Al', 'Aluminium', 13, '26.9815', '2792', '2698', '1.61'));
        $this->addElement(new Element('Si', 'Silicon', 14, '28.0850', '3538', '2.3296', '1.9'));
        $this->addElement(new Element('P', 'Phosphorus', 15, '30.9737', '550', '1.82', '2.19'));
        $this->addElement(new Element('S', 'Sulfur', 16, '32.0600', '717.87', '2067', '2.58'));
        $this->addElement(new Element('Cl', 'Chlorine', 17, '35.4500', '239.11', '0.003214', '3.16'));
        $this->addElement(new Element('Ar', 'Argon', 18, '39.9480', '87.30', '0.0017837', '–'));
        $this->addElement(new Element('K', 'Potassium', 19, '39.0983', '1032', '862', '0.82'));
        $this->addElement(new Element('Ca', 'Calcium', 20, '40.0780', '1757', '1.54', '1'));
        $this->addElement(new Element('Sc', 'Scandium', 21, '44.9559', '3109', '2989', '1.36'));
        $this->addElement(new Element('Ti', 'Titanium', 22, '47.8670', '3560', '4.54', '1.54'));
        $this->addElement(new Element('V', 'Vanadium', 23, '50.9415', '3680', '6.11', '1.63'));
        $this->addElement(new Element('Cr', 'Chromium', 24, '51.9961', '2944', '7.15', '1.66'));
        $this->addElement(new Element('Mn', 'Manganese', 25, '54.9380', '2334', '7.44', '1.55'));
        $this->addElement(new Element('Fe', 'Iron', 26, '55.8450', '3134', '7874', '1.83'));
        $this->addElement(new Element('Co', 'Cobalt', 27, '58.9331', '3200', '8.86', '1.88'));
        $this->addElement(new Element('Ni', 'Nickel', 28, '58.6934', '3186', '8912', '1.91'));
        $this->addElement(new Element('Cu', 'Copper', 29, '63.5460', '2835', '8.96', '1.9'));
        $this->addElement(new Element('Zn', 'Zinc', 30, '65.3800', '1180', '7134', '1.65'));
        $this->addElement(new Element('Ga', 'Gallium', 31, '69.7230', '2673', '5907', '1.81'));
        $this->addElement(new Element('Ge', 'Germanium', 32, '72.6300', '3106', '5323', '2.01'));
        $this->addElement(new Element('As', 'Arsenic', 33, '74.9215', '887', '5776', '2.18'));
        $this->addElement(new Element('Se', 'Selenium', 34, '78.9710', '958', '4809', '2.55'));
        $this->addElement(new Element('Br', 'Bromine', 35, '79.9040', '332.0', '3122', '2.96'));
        $this->addElement(new Element('Kr', 'Krypton', 36, '83.7980', '119.93', '0.003733', '3'));
        $this->addElement(new Element('Rb', 'Rubidium', 37, '85.4678', '961', '1532', '0.82'));
        $this->addElement(new Element('Sr', 'Strontium', 38, '87.6200', '1655', '2.64', '0.95'));
        $this->addElement(new Element('Y', 'Yttrium', 39, '88.9058', '3609', '4469', '1.22'));
        $this->addElement(new Element('Zr', 'Zirconium', 40, '91.2240', '4682', '6506', '1.33'));
        $this->addElement(new Element('Nb', 'Niobium', 41, '92.9063', '5017', '8.57', '1.6'));
        $this->addElement(new Element('Mo', 'Molybdenum', 42, '95.9500', '4912', '10.22', '2.16'));
        $this->addElement(new Element('Tc', 'Technetium', 43, '-98', '4538', '11.5', '1.9'));
        $this->addElement(new Element('Ru', 'Ruthenium', 44, '101.0700', '4423', '12.37', '2.2'));
        $this->addElement(new Element('Rh', 'Rhodium', 45, '102.9054', '3968', '12.41', '2.28'));
        $this->addElement(new Element('Pd', 'Palladium', 46, '106.4200', '3236', '12.02', '2.2'));
        $this->addElement(new Element('Ag', 'Silver', 47, '107.8682', '2435', '10501', '1.93'));
        $this->addElement(new Element('Cd', 'Cadmium', 48, '112.4140', '1040', '8.69', '1.69'));
        $this->addElement(new Element('In', 'Indium', 49, '114.8180', '2345', '7.31', '1.78'));
        $this->addElement(new Element('Sn', 'Tin', 50, '118.7100', '2875', '7287', '1.96'));
        $this->addElement(new Element('Sb', 'Antimony', 51, '121.7600', '1860', '6685', '2.05'));
        $this->addElement(new Element('Te', 'Tellurium', 52, '127.6000', '1261', '6232', '2.1'));
        $this->addElement(new Element('I', 'Iodine', 53, '126.9044', '457.4', '4.93', '2.66'));
        $this->addElement(new Element('Xe', 'Xenon', 54, '131.2930', '165.03', '0.005887', '2.6'));
        $this->addElement(new Element('Cs', 'Caesium', 55, '132.9054', '944', '1873', '0.79'));
        $this->addElement(new Element('Ba', 'Barium', 56, '137.3270', '2170', '3594', '0.89'));
        $this->addElement(new Element('La', 'Lanthanum', 57, '138.9054', '3737', '6145', '1.1'));
        $this->addElement(new Element('Ce', 'Cerium', 58, '140.1160', '3716', '6.77', '1.12'));
        $this->addElement(new Element('Pr', 'Praseodymium', 59, '140.9076', '3793', '6773', '1.13'));
        $this->addElement(new Element('Nd', 'Neodymium', 60, '144.2420', '3347', '7007', '1.14'));
        $this->addElement(new Element('Pm', 'Promethium', 61, '-145', '3273', '7.26', '1.13'));
        $this->addElement(new Element('Sm', 'Samarium', 62, '150.3600', '2067', '7.52', '1.17'));
        $this->addElement(new Element('Eu', 'Europium', 63, '151.9640', '1802', '5243', '1.2'));
        $this->addElement(new Element('Gd', 'Gadolinium', 64, '157.2500', '3546', '7895', '1.2'));
        $this->addElement(new Element('Tb', 'Terbium', 65, '158.9253', '3503', '8229', '1.2'));
        $this->addElement(new Element('Dy', 'Dysprosium', 66, '162.5000', '2840', '8.55', '1.22'));
        $this->addElement(new Element('Ho', 'Holmium', 67, '164.9303', '2993', '8795', '1.23'));
        $this->addElement(new Element('Er', 'Erbium', 68, '167.2590', '3141', '9066', '1.24'));
        $this->addElement(new Element('Tm', 'Thulium', 69, '168.9342', '2223', '9321', '1.25'));
        $this->addElement(new Element('Yb', 'Ytterbium', 70, '173.0450', '1469', '6965', '1.1'));
        $this->addElement(new Element('Lu', 'Lutetium', 71, '174.9668', '3675', '9.84', '1.27'));
        $this->addElement(new Element('Hf', 'Hafnium', 72, '178.4900', '4876', '13.31', '1.3'));
        $this->addElement(new Element('Ta', 'Tantalum', 73, '180.9478', '5731', '16654', '1.5'));
        $this->addElement(new Element('W', 'Tungsten', 74, '183.8400', '5828', '19.25', '2.36'));
        $this->addElement(new Element('Re', 'Rhenium', 75, '186.2070', '5869', '21.02', '1.9'));
        $this->addElement(new Element('Os', 'Osmium', 76, '190.2300', '5285', '22.61', '2.2'));
        $this->addElement(new Element('Ir', 'Iridium', 77, '192.2170', '4701', '22.56', '2.2'));
        $this->addElement(new Element('Pt', 'Platinum', 78, '195.0840', '4098', '21.46', '2.28'));
        $this->addElement(new Element('Au', 'Gold', 79, '196.9665', '3129', '19282', '2.54'));
        $this->addElement(new Element('Hg', 'Mercury', 80, '200.5920', '629.88', '13.5336', '2'));
        $this->addElement(new Element('Tl', 'Thallium', 81, '204.3800', '1746', '11.85', '1.62'));
        $this->addElement(new Element('Pb', 'Lead', 82, '207.2000', '2022', '11342', '1.87'));
        $this->addElement(new Element('Bi', 'Bismuth', 83, '208.9804', '1837', '9807', '2.02'));
        $this->addElement(new Element('Po', 'Polonium', 84, '(209)', '1235', '9.32', '2.0'));
        $this->addElement(new Element('At', 'Astatine', 85, '(210)', '500', '7', '2.2'));
        $this->addElement(new Element('Rn', 'Radon', 86, '(222)', '211.3', '0.00973', '2.2'));
        $this->addElement(new Element('Fr', 'Francium', 87, '(223)', '890', '1.87', '0.7'));
        $this->addElement(new Element('Ra', 'Radium', 88, '(226)', '2010', '5.5', '0.9'));
        $this->addElement(new Element('Ac', 'Actinium', 89, '(227)', '3471', '10.07', '1.1'));
        $this->addElement(new Element('Th', 'Thorium', 90, '232.0377', '5061', '11.72', '1.3'));
        $this->addElement(new Element('Pa', 'Protactinium', 91, '231.0358', '4300', '15.37', '1.5'));
        $this->addElement(new Element('U', 'Uranium', 92, '238.0289', '4404', '18.95', '1.38'));
        $this->addElement(new Element('Np', 'Neptunium', 93, '(237)', '4273', '20.45', '1.36'));
        $this->addElement(new Element('Pu', 'Plutonium', 94, '(244)', '3501', '19.84', '1.28'));
        $this->addElement(new Element('Am', 'Americium', 95, '(243)', '2880', '13.69', '1.13'));
        $this->addElement(new Element('Cm', 'Curium', 96, '(247)', '3383', '13.51', '1.28'));
        $this->addElement(new Element('Bk', 'Berkelium', 97, '(247)', '2900', '14.79', '1.3'));
        $this->addElement(new Element('Cf', 'Californium', 98, '(251)', '-1743', '15.1', '1.3'));
        $this->addElement(new Element('Es', 'Einsteinium', 99, '(252)', '-1269', '8.84', '1.3'));
        $this->addElement(new Element('Fm', 'Fermium', 100, '(257)', '–', '(9.7)', '1.3'));
        $this->addElement(new Element('Md', 'Mendelevium', 101, '(258)', '–', '(10.3)', '1.3'));
        $this->addElement(new Element('No', 'Nobelium', 102, '(259)', '–', '(9.9)', '1.3'));
        $this->addElement(new Element('Lr', 'Lawrencium', 103, '(266)', '–', '(15.6)', '1.3'));
        $this->addElement(new Element('Rf', 'Rutherfordium', 104, '(267)', '-5800', '(23.2)', '–'));
        $this->addElement(new Element('Db', 'Dubnium', 105, '(268)', '–', '(29.3)', '–'));
        $this->addElement(new Element('Sg', 'Seaborgium', 106, '(269)', '–', '(35.0)', '–'));
        $this->addElement(new Element('Bh', 'Bohrium', 107, '(270)', '–', '(37.1)', '–'));
        $this->addElement(new Element('Hs', 'Hassium', 108, '(270)', '–', '(40.7)', '–'));
        $this->addElement(new Element('Mt', 'Meitnerium', 109, '(278)', '–', '(37.4)', '–'));
        $this->addElement(new Element('Ds', 'Darmstadtium', 110, '(281)', '–', '(34.8)', '–'));
        $this->addElement(new Element('Rg', 'Roentgenium', 111, '(282)', '–', '(28.7)', '–'));
        $this->addElement(new Element('Cn', 'Copernicium', 112, '(285)', '(340)', '(14.0)', '–'));
        $this->addElement(new Element('Nh', 'Nihonium', 113, '(286)', '(1400)', '(16)', '–'));
        $this->addElement(new Element('Fl', 'Flerovium', 114, '(289)', '~210', '(14)', '–'));
        $this->addElement(new Element('Mc', 'Moscovium', 115, '(290)', '(1400)', '(13.5)', '–'));
        $this->addElement(new Element('Lv', 'Livermorium', 116, '(293)', '(1100)', '(12.9)', '–'));
        $this->addElement(new Element('Ts', 'Tennessine', 117, '(294)', '(883)', '(7.2)', '–'));
        $this->addElement(new Element('Og', 'Oganesson', 118, '(294)', '(~350)', '(5.0)', '–'));
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
