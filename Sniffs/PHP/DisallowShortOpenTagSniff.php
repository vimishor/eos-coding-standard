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
 * Make sure that shorthand PHP open tag is not used.
 *
 * Shorthand PHP open tags with echo are allowed.
 *
 * @author Alexandru G. <alex@gentle.ro>
 */
class eOS_Sniffs_PHP_DisallowShortOpenTagSniff implements PHP_CodeSniffer_Sniff
{
    /**
     * {@inheritDoc}
     */
    public function register()
    {
        return array(T_OPEN_TAG);
    }

    /**
     * {@inheritDoc}
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens  = $phpcsFile->getTokens();
        $openTag = $tokens[$stackPtr];

        if ($openTag['content'] === '<?') {
            $error = 'Short PHP opening tag used; expected "<?php" but found "%s"';
            $data  = array($openTag['content']);
            $phpcsFile->addError($error, $stackPtr, 'Found', $data);
        }

    }
}
