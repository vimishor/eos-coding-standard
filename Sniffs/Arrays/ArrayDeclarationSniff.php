<?php
/**
 * This file is part of the eos-coding-standard package.
 *
 * (c) 2014 Alexandru G. <alex@gentle.ro>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Disallow array declaration using "array" keyword.
 *
 * Array should be declared using square brackets.
 *
 * @author Alexandru G. <alex@gentle.ro>
 */
class eOS_Sniffs_Arrays_ArrayDeclarationSniff implements PHP_CodeSniffer_Sniff
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        return array(T_ARRAY);
    }

    /**
     * {@inheritDoc}
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens  = $phpcsFile->getTokens();

        if (strtolower($tokens[$stackPtr]['content']) === 'array') {
            $error = 'Array should be declared using square brackets; found "%s"';
            $data  = array($tokens[$stackPtr]['content']);
            $phpcsFile->addError($error, $stackPtr, 'NotSquareBrackets', $data);
        }
    }
}
