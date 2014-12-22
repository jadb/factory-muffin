<?php

/*
 * This file is part of Factory Muffin.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace League\FactoryMuffin;

/**
 * This is the model definition class.
 *
 * @author  Graham Campbell <graham@mineuk.com>
 * @author  Scott Robertson <scottymeuk@gmail.com>
 * @license <https://github.com/thephpleague/factory-muffin/blob/master/LICENSE> MIT
 */
class Definition
{
    /**
     * The model class name.
     *
     * @var string
     */
    protected $class;

    /**
     * The model group.
     *
     * @var string|null
     */
    protected $group;

    /**
     * The maker.
     *
     * @var callable|null
     */
    protected $maker;

    /**
     * The callback.
     *
     * @var callable|null
     */
    protected $callback;

    /**
     * The attribute definitions.
     *
     * @var array
     */
    protected $definitions = [];

    /**
     * Create a new model definition instance.
     *
     * @param string $class The model class name.
     *
     * @return void
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * Returns the real model class without the group prefix.
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set the model group.
     *
     * @param string|null $group The model group.
     *
     * @return \League\FactoryMuffin\Definition
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get the model group.
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set the maker.
     *
     * @param callable $maker The maker.
     *
     * @return \League\FactoryMuffin\Definition
     */
    public function setMaker(callable $maker)
    {
        $this->maker = $maker;

        return $this;
    }

    /**
     * Clear the maker.
     *
     * @return \League\FactoryMuffin\Definition
     */
    public function clearMaker()
    {
        $this->maker = null;

        return $this;
    }

    /**
     * Get the maker.
     *
     * @return callable|null
     */
    public function getMaker()
    {
        return $this->maker;
    }

    /**
     * Set the callback.
     *
     * @param callable $callback The callback.
     *
     * @return \League\FactoryMuffin\Definition
     */
    public function setCallback(callable $callback)
    {
        $this->callback = $callback;

        return $this;
    }

    /**
     * Clear the callback.
     *
     * @return \League\FactoryMuffin\Definition
     */
    public function clearCallback()
    {
        $this->callback = null;

        return $this;
    }

    /**
     * Get the callback.
     *
     * @return callable|null
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Add an attribute definitions.
     *
     * Note that we're appending to the original attribute definitions here.
     *
     * @param string          $attribute  The attribute name.
     * @param string|callable $definition The attribute definition.
     *
     * @return \League\FactoryMuffin\Definition
     */
    public function addDefinition($attribute, $definition)
    {
        $this->definitions[$attribute] = $definition;

        return $this;
    }

    /**
     * Set the attribute definitions.
     *
     * Note that we're appending to the original attribute definitions here
     * instead of switching them out for the new ones.
     *
     * @param array $definitions The attribute definitions.
     *
     * @return \League\FactoryMuffin\Definition
     */
    public function setDefinitions(array $definitions = [])
    {
        $this->definitions = array_merge($this->definitions, $definitions);

        return $this;
    }

    /**
     * Clear the attribute definitions.
     *
     * @return \League\FactoryMuffin\Definition
     */
    public function clearDefinitions()
    {
        $this->definitions = [];

        return $this;
    }

    /**
     * Get the attribute definitions.
     *
     * @return array
     */
    public function getDefinitions()
    {
        return $this->definitions;
    }
}
