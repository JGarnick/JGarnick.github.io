<?php

function maybe_unserialize( $data ) {
    
    // if it isn't a string, it isn't a serialized string.
    if ( ! is_string( $data ) ) {
        return false;
    }
    $data = trim( $data );
    
    return @unserialize($data);
}