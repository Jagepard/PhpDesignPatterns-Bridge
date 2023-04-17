## Table of contents
- [Structural\Bridge\BridgeInterface](#structural_bridge_bridgeinterface)
- [Structural\Bridge\Lowercase](#structural_bridge_lowercase)
- [Structural\Bridge\ServiceBridge](#structural_bridge_servicebridge)
- [Structural\Bridge\Uppercase](#structural_bridge_uppercase)
<hr>

<a id="structural_bridge_bridgeinterface"></a>

### Class: Structural\Bridge\BridgeInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>doSomething</strong>( string $input )</em><br>|


<a id="structural_bridge_lowercase"></a>

### Class: Structural\Bridge\Lowercase
##### implements [Structural\Bridge\BridgeInterface](#structural_bridge_bridgeinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>doSomething</strong>( string $input ): string</em><br>Performs some action<br>Выполняет какоето действие|


<a id="structural_bridge_servicebridge"></a>

### Class: Structural\Bridge\ServiceBridge
##### implements [Structural\Bridge\BridgeInterface](#structural_bridge_bridgeinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( Structural\Bridge\BridgeInterface $output )</em><br>Sets up a bridge<br>Устанавливает мост|
|public|<em><strong>doSomething</strong>( string $input )</em><br>Performs some action<br>Выполняет какоето действие|
|public|<em><strong>getOutput</strong>(): Structural\Bridge\BridgeInterface</em><br>Gets the result<br>Получает результат|


<a id="structural_bridge_uppercase"></a>

### Class: Structural\Bridge\Uppercase
##### implements [Structural\Bridge\BridgeInterface](#structural_bridge_bridgeinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>doSomething</strong>( string $input ): string</em><br>Performs some action<br>Выполняет какоето действие|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
