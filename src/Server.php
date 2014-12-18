<?php
/**
 * Part of the ETD Framework Progression Package
 *
 * @copyright   Copyright (C) 2015 ETD Solutions, SARL Etudoo. Tous droits réservés.
 * @license     Apache License 2.0; see LICENSE
 * @author      ETD Solutions http://etd-solutions.com
 */

namespace EtdSolutions\Progression;
/**
 * Serveur du processus long.
 */
class Server extends Base {

    public function __construct($max = 100) {

        parent::__construct();

        // On définit quelques propriétés pour le process.
        $this->set('max', $max);
        $this->set('progress', 0);
        $this->set('status', self::IDLE);
    }
}